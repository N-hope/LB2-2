# LB2-2
Нереляційна СУБД MongoDB і зберігання даних на стороні клієнта

Варіант 8. Створити і заповнити БД для зберігання інформації про використання мережевого трафіку.
У базі представлено дві колекції - колекція документів, що описує користувачів (логін, пароль, статичну IP-адресу клієнта, баланс рахунка, повідомлення), 
і колекція, яка містить документи, що описують сеанси виходу в Мережу: час початку й закінчення сеансу роботи, кількість вхідного трафіку, кількість вихідного трафіку, IP-адресу клієнта, вартість сеансу.

Надати користувачеві можливість отримання такої інформації:

повідомлення від обраного клієнта;
загальний вхідний і вихідний трафік;
вивести список клієнтів з від'ємним балансом рахунку.
