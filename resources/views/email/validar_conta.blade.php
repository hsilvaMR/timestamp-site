<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,700,600,800' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	<style type="text/css">
		body,
		table,
		td,
		a {
			font-family: 'Raleway', Arial, sans-serif;
		}

		a:link,
		a:hover,
		a:visited,
		a:active {
			text-decoration: none;
		}
	</style>
	<!--[if mso]>
    <style type="text/css">
    body, table, td, a, center {font-family: Arial, Helvetica, sans-serif !important;cursor:default;}
    </style>
    <![endif]-->
</head>

<body
	style="width:100%;background-color:#f1f1f1;margin:0;padding:0;font-size:14px;-webkit-font-smoothing:antialiased;cursor:default;color:#333333;">
	<!-- HEADER -->
	<table style="padding-top:20px;" border="0" cellpadding="0" width="100%">
		<tr>
			<td width="100%" align="center">
				<a href="" target="_bank" style="text-decoration:none;color:#ED1C24;">
					<img style="font-size:34px;line-height:40px;font-weight:bold;color:#65B241;"
						src="{{ asset('img/emails/logo.png') }}" alt="Mredis" height="41">
				</a>
			</td>
		</tr>
	</table>
	<!-- RESUMO -->
	<table style="padding:50px 20px 0 20px;" border="0" cellpadding="0" width="100%">
		<tr>
			<td align="left" width="100%">
				<h4 style="margin-bottom:20px;">Recuperar Password</h4>
				<a href="{!! route('recoverNewPass',$token) !!}">
					<button
						style="background:#707070;padding:4px 18px;height:32px;margin-top:20px;color:#fff;font-family: 'Segoeu';cursor:pointer;border:none;">
						Clique aqui para criar nova Password
					</button></a>
			</td>
		</tr>
	</table>
	<!-- FOOTER -->
	<table style="padding-top:20px;" border="0" cellpadding="0" width="100%">
		<tr>
			<td></td>
		</tr>
	</table>
</body>

</html>