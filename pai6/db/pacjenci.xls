<?xml version="1.0" encoding="UTF-8" ?>
	<xsl:stylesheet version="1.0"
		xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns="http://www.w3.org/1999/xhtml">

	<xsl:output method="xml" indent="yes"
		doctype-public="-//W3C//DTD XHTML 1.1//EN"
		doctype-system="http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"/>

	<xsl:template match="/">
		<html>
			<head>
				<title>Pacjenci</title>
				<link rel="stylesheet" type="text/css" href="../css/style.css" />
			</head>
			<body>
				<xsl:apply-templates/>
				<a href="../index.php">Powrót</a>
			</body>
		</html>
	</xsl:template>
		
	<xsl:template match="pacjenci">
		Lista pacjentów:
		<table>
			<tr>
				<td>ID</td>
				<td>Imię</td>
				<td>Nazwisko</td>
				<td>Adres</td>
			</tr>
			<xsl:for-each select="pacjent">
				<tr>
					<td><xsl:value-of select="@id"/></td>
					<td><xsl:value-of select="imie"/></td>
					<td><xsl:value-of select="nazwisko"/></td>
					<td><xsl:value-of select="adres"/></td>
				</tr>
			</xsl:for-each>
		</table>
	</xsl:template>	

</xsl:stylesheet>