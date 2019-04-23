<?xml version="1.0" encoding="UTF-8" ?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">
    <h2>Address Test</h2>
    <br/>
    <table id="table">
      <tr>
        <th>Job</th>
        <th>Company Name</th>
        <th>Oppinion</th>
      </tr>
      <xsl:for-each select="contents/content">
        <tr>
          <td><xsl:value-of select="job" /></td>
          <td><xsl:value-of select="companyName" /></td>
          <td><xsl:value-of select="oppinion" /></td>
        </tr>
      </xsl:for-each>
    </table>
  </xsl:template>
</xsl:stylesheet>