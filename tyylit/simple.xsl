<?xml version="1.0" encoding="ISO-8859-1"?>
<!-- Edited with XML Spy v4.2 -->
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns="http://www.w3.org/1999/xhtml">
  <body style="font-family:Arial,helvetica,sans-serif;font-size:12pt;
        background-color:#EEEEEE">
<table>
<tr>
<td valign="top" width="50%">
    <xsl:for-each select="ONIXMessage/Product">
      <xsl:for-each select="Contributor">
        <div style="background-color:teal;color:white;padding:4px">
         <span style="font-weight:bold;color:white">
            <xsl:value-of select="PersonName"/>
         </span>
        </div>
      </xsl:for-each>
      <div style="margin-left:20px;font-size:10pt">
        <span style="font-weight:bold">
             <xsl:value-of select="DistinctiveTitle"/>
        </span>
            (<xsl:value-of select="PublisherName"/>)
       </div>
       <div style="margin-left:25px;margin-bottom:1em">
         <xsl:element name="img">
         <xsl:attribute name="src">
               <xsl:value-of select="MediaFile/MediaFileLink"/>
           </xsl:attribute>
         </xsl:element>
       </div>
    </xsl:for-each>
</td>
<td>
</td>
</tr>
</table>
  </body>
</html>
