<?php

  function fetch_data()
{
    $somme=0;
    $output='';
    $conn=mysqli_connect("localhost","root","","prosysteme");
    $sql="SELECT * FROM client ORDER BY id ASC";
    $result=mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_array($result)) {
        $output .='<tr>
                            <td>'.$row["id"].'</td>
                            <td>'.$row["nom"].'</td>
                            <td>'.$row["prenom"].'</td>
                            <td>'.$row["email"].'</td>
                            
                            
        
                    </tr>
                    ';;
    }
    $result=mysqli_query($conn,$sql);
    return $output;
}
if (!isset($_GET["generate_pdf"])) 
{
    require_once('tcpdf/tcpdf/tcpdf.php');
    $obj_pdf = new TCPDF('P',PDF_UNIT,PDF_PAGE_FORMAT,true,'UTF-8',false);
    $obj_pdf->SetCreator(PDF_CREATOR);
    $obj_pdf->SetTitle("liste des client");
    $obj_pdf->SetHeaderData('','',PDF_HEADER_TITLE,PDF_HEADER_STRING);
    $obj_pdf->SetHeaderFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
    $obj_pdf->SetFooterFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
    $obj_pdf->setDefaultMonospacedFont('helvetica');
    $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    $obj_pdf->SetMargins(PDF_MARGIN_LEFT,'10',PDF_MARGIN_RIGHT);
    $obj_pdf->SetPrintHeader(false);
    $obj_pdf->SetPrintFooter(false);
    $obj_pdf->SetAutoPageBreak(TRUE,10);
    $obj_pdf->SetFont('helvetica','',11);
    $obj_pdf->AddPage();
    $content = '';
    $content .='
    <table border="1" cellspacing="0" cellpadding="3">
    <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>PRENOM</th>
            <th>Email</th>
    </tr>
    ';
    $content .=fetch_data();
    $content .='</table>';
    $content;
    $obj_pdf->writeHTML($content);
    $obj_pdf->Output('file.pdf','I');
    
}
?> 