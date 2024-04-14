# PHP KhachSan

PHP KhachSan là một ứng dụng quản lý khách sạn được viết bằng ngôn ngữ PHP. Ứng dụng này giúp quản lý các phòng, đặt phòng, thanh toán và các tính năng quản lý khách sạn khác.

## Cài đặt

Để cài đặt dự án, bạn cần có PHP và một máy chủ web như Apache hoặc Nginx. Sau đó, làm theo các bước sau:

1. **Clone repository**: Clone repository này về máy tính của bạn bằng lệnh sau:

    ```
    git clone https://github.com/thewind22/phpkhachsan.git
    ```

2. **Cấu hình môi trường**: Chuyển vào thư mục của dự án và tạo một tập tin cấu hình `.env` dựa trên tệp `.env.example`. Cung cấp thông tin cấu hình cho máy chủ MySQL của bạn.

3. **Cài đặt các gói**: Sử dụng Composer để cài đặt các gói cần thiết bằng lệnh:

    ```
    composer install
    ```

4. **Chạy cơ sở dữ liệu**: Chạy các lệnh migrate và seed để tạo và điền dữ liệu mẫu:

    ```
    php artisan migrate --seed
    ```

5. **Chạy ứng dụng**: Khởi động máy chủ phát triển bằng lệnh:

    ```
    php artisan serve
    ```

6. **Truy cập ứng dụng**: Mở trình duyệt và truy cập địa chỉ `http://localhost:8000` để bắt đầu sử dụng ứng dụng.

## Sử dụng

Dưới đây là một số chức năng cơ bản của ứng dụng:

- **Đặt phòng**: Người dùng có thể đặt phòng theo ngày cụ thể.
- **Quản lý phòng**: Quản trị viên có thể thêm, sửa đổi hoặc xóa phòng khách sạn.
- **Thanh toán**: Thực hiện thanh toán cho các đơn đặt phòng.

## Đóng góp

Nếu bạn muốn đóng góp vào dự án, bạn có thể gửi pull request hoặc báo cáo lỗi trong phần [Issues](https://github.com/yourusername/phpkhachsan/issues).

## Giấy phép

Dự án này được phân phối dưới giấy phép [MIT License](https://opensource.org/licenses/MIT).
