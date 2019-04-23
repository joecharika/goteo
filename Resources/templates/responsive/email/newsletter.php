<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Goteo Newsletter</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic|Open+Sans+Condensed:300|Kalam);
        /* A simple css reset */
        body,table,thead,tbody,tr,td,img {
            padding: 0;
            margin: 0;
            border: none;
            border-spacing: 0px;
            border-collapse: collapse;
            vertical-align: top;
            font-family: Roboto,sans-serif;
            color: #3a3a3a;
        }
        a{
            text-decoration: none;
            color: #337ab7;
        }
        /* Add some padding for small screens */
        .wrapper {
            padding-left: 0px;
            padding-right: 0px;
        }
        h1,h2,h3,h4,h5,h6,p {
            margin: 0;
            padding: 0 20px 20px 20px;
            line-height: 1.6;
        }
        .margin-btn{
        	margin-top: 40px;
        	margin-bottom: 80px;
        }
        .pd-footer{
        	padding: 40px 0px 40px 0px !important;
        }
        .pd-description{
        	padding: 30px 0px 30px 0px !important;
            font-weight: 200;
        }
        .mt-40{
            margin-top: 40px;
        }
        .title-algunos{
        	font-size: 21px;
        	margin-top: 30px;
        	text-align: center;
        }
        h1{
        	font-size: 28px;
        	color: #149290;
        	text-align: center;
        	margin-top: 20px;
        }
        h2{
        	font-size: 18px;
        	color: #a63c98;
        	text-align: center;
        }
        .title-projects{
        	padding-bottom: 10px;
            padding-top: 10px;
        	font-size: 22px;
        	line-height: 1;
        	color: #2bbbb7;
            font-weight: 500;
        }
        .subtitle-projects{
        	padding-bottom: 4px;
        	font-size: 15px;
        	line-height: 0.8;
            font-weight: 400;
        }
        .icon-info{
        	padding-bottom: 4px;
        	font-size: 13px;
        	color: #919193;
        	line-height: 0.8;
        }
        .icons{
        	width: 8% !important;
        	display: inline-block;
        }
        .logo-fundacion{
        	width: 80% !important;
        	display: inline-block;
        }
        .claim-fundacion{
            padding: 20px 0 20px 60px;
        }
        hr{
        	width: 55%;
        	margin-left: 20px;
        	border: 1px solid #c6cdcc;
        }
        .pd-all{
        	padding: 10px 0px 10px 0px !important;
        }
        .pd-fundacion{
        	padding: 40px 0px 40px 370px;
        }
        .pd-fundacion-dos{
        	padding: 0px 100px 30px 0px !important;
        }
        .btn-fundacion{
			color: #58595b;
    		padding: 13px 0;
    		background-color: #fff;
    		display: inline-block;
		    padding: 6px 12px;
		    margin-bottom: 0;
		    font-size: 14px;
		    font-weight: 400;
		    line-height: 1.42857143;
		    text-align: center;
		    white-space: nowrap;
		    cursor: pointer;
		    border: 1px solid transparent;
		    border-radius: 4px;
		    text-decoration: none;
		}
        .btn-fundacion:hover{
            background-color: #e6e6e6;
        }
        .btn-proyectos{
			color: #ffffff;
    		padding: 13px 0;
    		background-color: #19b4b2;
    		display: inline-block;
		    padding: 6px 12px;
		    margin-bottom: 0;
		    font-size: 14px;
		    font-weight: 400;
		    line-height: 1.42857143;
		    text-align: center;
		    white-space: nowrap;
		    cursor: pointer;
		    border: 1px solid transparent;
		    border-radius: 4px;
		    text-decoration: none;
		}
        .btn-proyectos:hover{
            background-color: #1DAAA9;
        }
		.proyectos{
			margin-bottom: 30px;
		}
		.footer{
			color: #FFF;
			text-align: center;
		}
		.footer p{
			color: #FFF;
			text-align: center;
			padding-bottom: 0px;
            font-weight: 200;
		}

        li{
            margin-bottom: 10px;
        }
        
		.text-center{
			text-align: center;
		}
        img {
            width: 100%;
            display: block;
        }
        @media only screen and (max-width: 620px) {
            .wrapper .section {
                width: 100%;
            }
            .wrapper .column {
                width: 100%;
                display: block;
            }
            .pd-fundacion {
                padding: 20px 20px 0px 20px !important;
            }
            .pd-all {
            padding:  0 85% !important;
            }
            .pd-fundacion-dos {
                padding: 0px 50% 40px 40% !important;
            }
            .space-footer{
                display: none !important;
            }
            .img-center{
            display: inline-block;
            width: 45% !important;
            padding-left: 150px;
            margin-right: 50%;
            text-align: center;
            }
        .btn-proyectos{
            margin-left: 50% !important;
        }
        }
        @media only screen and (max-width: 320px) {
            .wrapper .section .full-img {
                width: 100%;
            }
            .wrapper .column {
                width: 100%;
                display: block;
            }
            .pd-fundacion {
            padding: 0px 0px 0px 0px !important;
            }
            .pd-all {
            padding:  0 85% !important;
            }
            .claim-fundacion{
                padding-left: 0px !important;
            }
            .pd-fundacion-dos {
            padding: 0px 10% 40px 25% !important;
            }
        }
        @media (min-width: 320px) and (max-width: 414px) {
            .claim-fundacion{
                padding: 20px 10px 0px 10px !important;
            }
        }
    </style>
</head>

<body>
    <table width="100%">
        <tbody>
            <tr>
                <td class="wrapper" width="600" align="center">
                 <!-- Top bar logo -->
                    <table class="section header" cellpadding="0" cellspacing="0" width="100%" border="0" bgcolor="#19b4b2">
                        <tr>
                            <td class="column" width="250" valign="top">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td align="left">
                                                <td> &nbsp; </td>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="column" width="100" valign="top">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td align="left">
                                            	<img class="pd-all" src="<?= $this->asset('img/goteo-white.svg') ?>" alt="" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td class="column" width="200" valign="top">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td align="left">
                                                <td> &nbsp; </td>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>

                        </tr>
                    </table>
                    <!-- IMG HEADER -->
                    <table class="section header" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td class="column">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td align="left">
                                            	<img class="img-header" src="<?= $this->asset('img/newsletter/header.png') ?>" alt="Goteo" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </table>

                    <!-- Contenido -->
                    
					<?= $this->raw('content') ?>

                    <!-- BOTON VER PROYECTOS -->
                    <table class="section margin-btn" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="column" width="100%" valign="top">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td align="left">
                                                <p>
                                                	<a class="btn-proyectos" href="">VER MÁS PROYECTOS</a>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </table>

	               <!-- FOOTER SOCIAL -->
                    <table class="section header" cellpadding="0" cellspacing="0" width="100%" border="0" bgcolor="#555555">
	                   <tr> 
                            <td align="center">
                                <table border="0" cellpadding="0" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td style="padding-right: 10px; padding-top:20px;" colspan="0" align="center">
                                                <a style="text-decoration: none; color: #212121;" href="https://t.me/goteofunding" target="_blank">
                                                    <img src="<?= $this->asset('img/newsletter/telegram.png') ?>" alt="Telegram" width="30" height="30" border="0" style="display: block;" />
                                                </a>
                                            </td>
                                            <td style="padding-right: 10px; padding-top:20px;" colspan="0" align="center">
                                                <a style="text-decoration: none; color: #212121;" href="http://twitter.com/goteofunding" target="_blank">
                                                    <img src="<?= $this->asset('img/newsletter/twitter.png') ?>" alt="Twitter" width="30" height="30" border="0" style="display: block;" /></a>
                                            </td>
                                            <td style="padding-right: 10px; padding-top:20px;" colspan="0" align="center">
                                                <a style="text-decoration: none; color: #212121;" href="https://www.facebook.com/goteofunding/" target="_blank">
                                                    <img src="<?= $this->asset('img/newsletter/facebook.png') ?>" alt="Facebook" width="30" height="30" border="0" style="display: block;" /></a>
                                            </td>
                                            <td style="padding-right: 10px; padding-top:20px;" colspan="0" align="center">
                                                <a style="text-decoration: none; color: #212121;" href="https://instagram.com/goteofunding/" target="_blank">
                                                    <img src="<?= $this->asset('img/newsletter/instagram.png') ?>" alt="Instagram" width="30" height="30" border="0" style="display: block;" /></a>
                                            </td>
                                        </tr>
                                </td>
                            </tr>
	                    </table>

                    <!-- PRE-FOOTER -->
                    <table class="section footer header" cellpadding="0" cellspacing="0" width="100%" border="0" bgcolor="#555555">
                       <tr> 
                        <td align="center">
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td style="padding-right: 10px; padding-top:20px;" colspan="0" align="center">
                                            <p>
                                                <a href="https://goteo.org/project/create"><?= $this->text('regular-create') ?></a>
                                            </p>
                                            <p>
                                                <?= $this->text('newsletter-block', $this->raw('unsubscribe')) ?>       
                                            </p>
                                        </td>
                                    </tr>
                        </tr>
                    </table>

 					<!-- PRE-FOOTER II -->
                    <table class="section footer" width="100%" cellpadding="0" cellspacing="0" bgcolor="#555555">
                        <tr>
                        	<td class="column" width="100" valign="top">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        	<td class="column" width="400" valign="top">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                            	<p class="pd-description">Goteo es una plataforma para apoyar proyectos cívicos, éticos y abiertos de ciudadan@s, emprendedor@s, innovador@s sociales y creativ@s que compartan conocimiento significativo para la sociedad.</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        	<td class="column" width="100" valign="top">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </table>

                   <!-- INICIATIVA GOTEO -->
                    <table class="section header" cellpadding="0" cellspacing="0" width="100%" border="0" bgcolor="#555555">
                       <tr> 
                            <td align="center">
                                <table border="0" cellpadding="0" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td colspan="0" align="center">
                                                <p>Una iniciativa de: </p>
                                            </td>
                                            <td style="padding-right: 10px;" colspan="0" align="center">
                                                <a style="text-decoration: none; color: #212121;" href="http://fundacion.goteo.org/" target="_blank"><img src="" alt="Fundación Goteo" width="30" height="30" border="0" style="display: block;" /></a>
                                            </td>
                                        </tr>
                                </td>
                            </tr>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>