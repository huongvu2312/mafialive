# MafiaLive server
## Giới thiệu

Đây là trang web cho forum MafiaLive, được xây bởi framework tạo forum [XenForo](https://xenforo.com/purchase/self-hosted) và chạy với database MariaDB.

## Cách chạy server
Lưu ý: Hướng dẫn này chỉ dành cho Windows.

1. Tải ứng dụng [XAMPP](https://www.apachefriends.org/de/download.html) để tự chạy server trong máy tính
2. Mở XAMPP. Để không bị mắc lỗi, khuyến khích dùng quyền admin để chạy XAMPP (click phải chuột -> `Run as administrator`).

Menu của XAMPP sẽ trông như dưới:

![image](https://github.com/huongvu2312/mafialive/assets/37365828/ca5c1bc6-ef50-4ffd-9b6e-3816254a7397)

Nếu Apache và MySQL không có dấu tích màu xanh lá, tức là máy tính của bạn vẫn chưa được cài Apache và MySQL trong quá trình cài đặt XAMPP. Khuyến khích cài đặt lại khi gặp trường hợp này.

3. Ở dòng Apache, click `Config` -> `Apache (httpd.conf)` -> Tìm `DocumentRoot` và `Directory`, chèn vào địa chỉ của folder `public_html` mà bạn tải dự án này về. VD:
```
#
# DocumentRoot: The directory out of which you will serve your
# documents. By default, all requests are taken from this directory, but
# symbolic links and aliases may be used to point to other locations.
#

DocumentRoot "D:/Programming/ProgrammierungProjekt/mafialive/public_html"

<Directory "D:/Programming/ProgrammierungProjekt/mafialive/public_html">
```

4. Ở dòng Apache, click `Config` -> `Apache (httpd-ssl.conf)` -> Tìm `DocumentRoot`, chèn vào địa chỉ của folder `public_html` mà bạn tải dự án này về. VD:
```
#   General setup for the virtual host
DocumentRoot "D:/Programming/ProgrammierungProjekt/mafialive/public_html"
```
4. Click "Start" cho Apache và MySQL
5. Vào http://localhost với bất kì browser nào để mở trang web.
6. Vào http://localhost/phpmyadmin/ để bỏ database vào server. Từ trang này, tạo 1 database mới với tên `mafialiv_forum` và Collaton `utf8mb4_general_ci`.

Trong file `mafialiv_forum_database.zip` là toàn bộ dữ liệu của các kì game. Unzip folder này sẽ được một file sql.

Sau khi có file sql, quay lại trang PHPMyAdmin, chọn database vừa tạo và ấn `Import`. Chọn `Browse` và chọn file sql bạn vừa unzip rồi ấn `Go`.

Lưu ý: file rất nặng nên có thể sẽ dừng tạm thời trong lúc tải lên server. Khi có thông báo đỏ, xin hãy tải đúng file đó một lần nữa.

Khi có thông báo đỏ lần 2 liên quan đến lỗi NULL, có thể bỏ qua thông báo đó và tắt thẻ tab, vì khi đó data đã được tải xong.

## Một số lỗi thường gặp

### Server không chạy do trùng port
Có thể server không chạy do máy tính bạn đang sử dụng Port 80 (default port) cho một ứng dụng khác. Default port của Apache là 80, của MySQL là 3306. Để kiểm tra xem port của bạn có đang được sử dụng bởi ứng dụng khác không, click vào `Netstat` (nút thứ 2 bên phải). Trong danh sách port, kiểm tra xem số 80 và 3306 có xuất hiện không. Lưu ý: xin kiểm tra port trước khi bắt đầu server (tức là trước khi ấn nút Start cho Apache và MySQL). Nếu đã lỡ start, bạn có thể ấn nút Stop để tạm dừng.

Nếu port đã bị chiếm, bạn cần sửa default port.

##### Apache
Vào `config` của dòng Apache -> `Apache (httpd.conf)` -> Tìm `80` và sửa lại thành 1 port khác chưa được sử dụng. VD:
```
Listen 81

...

ServerName localhost:81
```

##### MySQL
Vào `config` của dòng MySQL -> `my.ini` -> Tìm 2 dòng `port = 3306` và sửa lại thành 1 port khác chưa được sử dụng. VD:
```
# The following options will be passed to all MySQL clients
[client] 
# password       = your_password 
port            = 3307

...

# The MySQL server
[mysqld]
port= 3307
```
### Server không chạy do PHP ko chạy
Có thể PHP của bạn chưa được cài đặt đầy đủ khi cài XAMPP. Khi điều đó xảy ra, bạn cần vào thanh tìm kiếm và tìm keyword `Edit system variables` 

-> `Environment variables` 

-> Trong mục `System variables`, click đúp vào `Path` 

-> `New` 

-> Chèn địa chỉ folder PHP của bạn (vd: `C:\xampp\php`)

-> `Ok` x3

### (Dev only) Unknown error
Nếu đã làm cả 2 bước trên mà server vẫn chưa chạy, bạn có thể tự debug bằng việc click `Shell` (nút thứ 3 bên phải) -> Ghi lệnh
```
Apache_Start.bat
```

Lỗi sẽ được hiện lên cho bạn tự sửa.
