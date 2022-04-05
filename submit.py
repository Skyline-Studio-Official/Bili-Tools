from os import system
import time
import datetime

a = input("Description: >>")

debug = False
date_time = datetime.datetime.now().strftime("%Y.%m.%d | %H:%M | "+a)

if not debug:
    system("git add .")
    system("git commit -m \""+ date_time +"\"")
    system("git push")