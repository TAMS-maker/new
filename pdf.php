<?php  


function fetch_data()  

 { 
   include('connect.php');

      $output = '';  
      $con = mysqli_connect("localhost", "root", "", "client");  
      $sql = " SELECT * FROM userinfo WHERE id= ".$id;
      $result = mysqli_query($con, $sql);  
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
      {       
      $output .= '<tr>  
                          <td>'.$row["id"].'</td>  
                          <td>'.$row["Fname"].'</td>  
                          <td>'.$row["Lname"].'</td>  
                          <td>'.$row["Email"].'</td>  
                          <td>'.$row["Event"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output;  
 }  
 if(isset($_POST["create_pdf"]))  
 {  
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h3 align="center">Export HTML Table data to PDF using TCPDF in PHP</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                <th width="5%">ID</th>  
                <th width="30%">Fname</th>  
                <th width="10%">Lname</th>  
                <th width="45%">Email</th>  
                <th width="10%">Event</th>  
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);
      ob_end_clean();  
      $obj_pdf->Output('sample.pdf', 'I');  
 }  
 ?>  