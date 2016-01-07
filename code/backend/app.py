import random
import datetime
import time
import MySQLdb
import smtplib

def mail():

    SERVER = "localhost"
    FROM = "austin@bogo.gq"
    TO = []

    db = MySQLdb.connect(host='localhost', user='root', passwd='paper', db='bogo')
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
    """ % (FROM, ", ".join(''.join(elems) for elems in TO), SUBJECT, TEXT)

    server = smtplib.SMTP(SERVER)
    server.sendmail(FROM, TO, message)
    server.quit()

#basic bogosort example
list1 = [1, 2, 3, 4, 5, 6, 7, 8, 9]


def unordered(alist):
    while alist != [1, 2, 3, 4, 5, 6, 7, 8, 9]:
        return True
    return False


def bogosort(somelist):
    start = datetime.datetime.now()
    print "running"
    a = 0
    while unordered(somelist):
	time.sleep(6.5)
        random.shuffle(somelist)
        print a
        a += 1
    print datetime.datetime.now() - start
    print "BOGONIGHT"
    mail() 

random.shuffle(list1)
bogosort(list1)
