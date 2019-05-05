<?xml version="1.0" encoding="UTF-8" ?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">
 	<xsl:for-each select="addresses/address">
	  <div id="contactMe">
	    <p><span><xsl:value-of select="road"/><xsl:value-of select="city" />,<xsl:value-of select="state" /></span><xsl:value-of select="zip" /></p>
	    <p><xsl:value-of select="phoneNum" /></p>
	    <p><xsl:value-of select="email" /></p>
	  </div>
	</xsl:for-each>   
  </xsl:template>
</xsl:stylesheet>