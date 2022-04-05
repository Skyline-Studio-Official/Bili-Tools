from os import system
import time
import datetime

a = input("Version: >>")

debug = False
date_time = datetime.datetime.now().strftime("%Y.%m.%d | %H:%M | Ver "+a)

if not debug:
    system("git add .")
    system("git commit -m \""+ date_time +"\"")
    system("git push")