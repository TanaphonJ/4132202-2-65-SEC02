import telnetlib

# กำหนดข้อมูลเชื่อมต่อ Telnet Server
HOST = "10.30.164.56"
PORT = 23

# เชื่อมต่อ Telnet Server
tn = telnetlib.Telnet(HOST, PORT)

# ส่งคำสั่งให้ Telnet Server
tn.write(b"ls\n")

# รับข้อมูลจาก Telnet Server
print(tn.read_all())
