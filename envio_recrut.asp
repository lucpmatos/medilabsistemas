<%
	On Error Resume Next

	Set myMail=CreateObject("CDO.Message")
	myMail.Subject= request.form("assunto")
	myMail.From= request.form("nome", "sobrenome") & "<contato@medilabsistemas.com.br>"
	myMail.To= "recrutamento@medilabsistemas.com.br"
	myMail.Bcc = "comunicacao@medilabsistemas.com.br"
	
	myMail.BodyPartCharset = "UTF-8"
	
	'MENSAGEM
	myMail.TextBody = request.form("mensagem")
	
	myMail.Configuration.Fields.Item _
	("http://schemas.microsoft.com/cdo/configuration/sendusing")=2
	'Name or IP of remote SMTP server
	myMail.Configuration.Fields.Item _
	("http://schemas.microsoft.com/cdo/configuration/smtpserver")="smtp.medilabsistemas.com.br"
	'Server port
	myMail.Configuration.Fields.Item _
	("http://schemas.microsoft.com/cdo/configuration/smtpserverport")=587
	myMail.Configuration.Fields.Item _
	("http://schemas.microsoft.com/cdo/configuration/smtpauthenticate")=1
	myMail.Configuration.Fields.Item _
	("http://schemas.microsoft.com/cdo/configuration/sendusername")="contato@medilabsistemas.com.br"
	myMail.Configuration.Fields.Item _
	("http://schemas.microsoft.com/cdo/configuration/sendpassword")="m&dil@b3421"
	myMail.Configuration.Fields.Update
	myMail.Send
	set myMail=nothing
	
	response.write("Email Enviado")
%>
