import smtplib
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart

# Definir as informações do servidor SMTP
smtp_server = 'smtp.gmail.com'
smtp_port = 587
smtp_username = 'seu_email@gmail.com'
smtp_password = 'sua_senha'

# Definir as informações do e-mail
from_email = 'seu_email@gmail.com'
to_email = 'email_destino@gmail.com'
subject = 'Assunto do e-mail'
message = 'Conteúdo do e-mail'

# Criar objeto MIMEMultipart para o e-mail
msg = MIMEMultipart()
msg['From'] = from_email
msg['To'] = to_email
msg['Subject'] = subject

# Adicionar o conteúdo do e-mail
msg.attach(MIMEText(message, 'plain'))

# Criar objeto SMTP e enviar o e-mail
with smtplib.SMTP(smtp_server, smtp_port) as server:
    server.starttls()
    server.login(smtp_username, smtp_password)
    server.sendmail(from_email, to_email, msg.as_string())
