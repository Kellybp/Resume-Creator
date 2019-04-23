<?xml version="1.0" encoding="UTF-8" ?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
		<h2>Famous Quotes (xsl editon)</h2>
		<br/>
		<table id="table">
			<tr>
				<th style="text-align:left">Author</th>
				<th style="text-align:left">Saying</th>
			</tr>
			<xsl:for-each select="Fquotes/quote">
				<tr>
					<td><xsl:value-of select="author" /></td>
					<td><xsl:value-of select="saying" /></td>
				</tr>
			</xsl:for-each>
		</table>
	</xsl:template>
</xsl:stylesheet>