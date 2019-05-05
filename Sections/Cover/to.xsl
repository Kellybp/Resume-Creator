<?xml version="1.0" encoding="UTF-8" ?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">
    <xsl:for-each select="jobs/job">
      <ul id="to">
        <xsl:if test="hireMngr != ''">
          <li><xsl:value-of select="hireMngr" /></li>
        </xsl:if>
        <xsl:if test="companyName != ''">
          <li><xsl:value-of select="companyName" /></li>
        </xsl:if>
        <xsl:if test="road != ''">
          <li><xsl:value-of select="road" /></li>
        </xsl:if>
        <xsl:if test="hireMngr != ''">
          <!--This needs more work-->
          <li><span><xsl:value-of select="city" />, <xsl:value-of select="state" /> <xsl:value-of select="zip" /></span></li>
        </xsl:if>
        <xsl:if test="phoneNum != ''">
          <li><xsl:value-of select="phoneNum" /></li>
        </xsl:if>
        <xsl:if test="email != ''">
          <li><xsl:value-of select="email" /></li>
        </xsl:if>
        <li>Dear <xsl:value-of select="hireMngr" />,</li>
      </ul>
    </xsl:for-each>
  </xsl:template>
</xsl:stylesheet>