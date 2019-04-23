<?xml version="1.0" encoding="UTF-8" ?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">
    <h2>Address Test</h2>
    <br/>
    <table id="table">
      <tr>
        <th>Hiring Manager</th>
        <th>Company Name</th>
        <th>Road</th>
        <th>City</th>
        <th>State</th>
        <th>Zip</th>
        <th>Phone Number</th>
        <th>Email</th>
      </tr>
      <xsl:for-each select="jobs/job">
        <tr>
          <td><xsl:value-of select="hireMngr" /></td>
          <td><xsl:value-of select="companyName" /></td>
          <td><xsl:value-of select="zip" /></td>
          <td><xsl:value-of select="phoneNum" /></td>
          <td><xsl:value-of select="email" /></td>
          <td><xsl:value-of select="road" /></td>
          <td><xsl:value-of select="state" /></td>
          <td><xsl:value-of select="zip" /></td>
        </tr>
      </xsl:for-each>
    </table>
  </xsl:template>
</xsl:stylesheet>