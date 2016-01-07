import MySQLdb
import smtplib

def mailAll()

    SERVER = "localhost"

    FROM = "austin@bogo.gq"
    TO = []

    db = MySQLdb.connect(host = 'localhost', user = 'root', passwd='paper', db = 'bogo')
    cursor = db.cursor()
    cursor.execute('SELECT email FROM users WHERE email IS NOT NULL')
    db.commit()
    rows = cursor.fetchall()
    for user in rows:
        TO.append(user)

    SUBJECT = "It's Done!"
    TEXT = "Get ready to party!"

    message = """\
            From: %s
            To: %s
            Subject %s

    %s
    """ %(FROM, ", ".join(TO), SUBJECT, TEXT)

    server = smtplib.SMTP(SERVER)
    server.sendmail(FROM, TO, message)
    server.quit()
