<?xml version="1.0" encoding="UTF-8" ?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">
    <xsl:for-each select="contents/content">
      <p>I am contacting you regarding the <strong><xsl:value-of select="job" /></strong> position for <strong><xsl:value-of select="companyName" /></strong>. I am very interested in further details and in filling out an application form.<br/><br/>
      As my résumé indicates, I have extensive experience working in with software and web development environments through my <strong>numerous projects</strong>. The knowledge and skills I have gained by leading my troop as an <strong>Eagle Scout</strong> has enhanced my responsibility and ability to take initiative.  In my previous position as a <strong>web/software developer</strong> for 360Rize, I was a one-man tech team where I learned the values of communication and documentation. </p>
      <p><xsl:value-of select="oppinion" /></p>
      <p>I look forward to the opportunity to learn more about this position.<br/><br/>
      Thank you for your time and consideration. <br/><br/>
      Sincerely, <br/>
      Brian Kelly <br/>
      </p>
    </xsl:for-each>
  </xsl:template>
</xsl:stylesheet>