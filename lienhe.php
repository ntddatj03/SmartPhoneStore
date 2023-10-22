<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Liên hệ - Thế giới điện thoại</title>
  <link rel="shortcut icon" href="img/favicon.ico" />

  <!-- Load font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    crossorigin="anonymous">

  <!-- Jquery -->
  <script src="lib/Jquery/Jquery.min.js"></script>

  <!-- our files -->
  <!-- css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/topnav.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/taikhoan.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/lienhe.css">

  <!-- js -->
  <script src="data/products.js"></script>
  <script src="js/dungchung.js"></script>
  <script src="js/lienhe.js"></script>

  <?php require_once "php/echoHTML.php"; ?>

</head>

<body>
  <?php addTopNav(); ?>

  <section style="min-height: 85vh">
    <?php addHeader(); ?>

    <div class="body-lienhe">
      <div class="lienhe-header">Liên hệ</div>
      <div class="lienhe-info">
        <div class="info-left">
          <p>
            <h2 style="color: gray"> TRƯỜNG CĐ NGHỀ BÁCH KHOA HÀ NỘI </h2><br />
            <b>Địa chỉ:</b> 92A - Lê Thanh Nghị – Hai Bà Trưng – Hà Nội <br /><br />
            <b>Hotline:</b> 024.36230209 (Tổng đài) - 039.3006008 (Hotline)<br /><br />
            <b>Website:</b> <a href="https://www.hactech.edu.vn/">HACTECH</a> <br /><br />
            <b>E-mail:</b> contact@hactech.edu.vn<br /><br />
            <b>Thời gian làm việc:</b> 8:00 - 17h:00 ( Từ thứ 2 đến thứ 6 )<br /><br /><br /><br /><br><br><br><br><br><br>
            <b>Quý khách có thể gửi liên hệ tới chúng tôi bằng cách hoàn tất biểu mẫu dưới đây. Chúng tôi
              sẽ trả lời thư của quý khách, xin vui lòng khai báo đầy đủ. Hân hạnh phục vụ và chân thành
              cảm ơn sự quan tâm, đóng góp ý kiến đến Smartphone Store.</b>
          </p>
        </div>
        <div class="info-right">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.737295808304!2d105.84518797588731!3d21.003165188656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac742d3b83df%3A0x28772da31fb145b1!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIG5naOG7gSBCw6FjaCBLaG9hIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1697019608505!5m2!1svi!2s" 
          width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
          <br />
        </div>
      </div>
      <div class="lienhe-info">

        <div class="guithongtin">
          <p style="font-size: 22px; color: gray">Gửi thông tin liên lạc cho chúng tôi: </p>
          <hr />
          <form name="formlh" onsubmit="return nguoidung()">
            <table cellspacing="10px">
              <tr>
                <td>Họ và tên</td>
                <td><input type="text" name="ht" size="40" maxlength="40" placeholder="Họ tên" autocomplete="off"
                    required></td>
              </tr>
              <tr>
                <td>Điện thoại liên hệ</td>
                <td><input type="text" name="sdt" size="40" maxlength="11" minlength="10" placeholder="Điện thoại"
                    required></td>
              </tr>
              <tr>
                <td>Địa chỉ Email</td>
                <td><input type="email" name="em" size="40" placeholder="Email" autocomplete="off" required></td>
              </tr>
              <tr>
                <td>Tiêu đề</td>
                <td><input type="text" name="tde" size="40" maxlength="100" placeholder="Tiêu đề" required>
              </tr>
              <tr>
                <td>Nội dung</td>
                <td><textarea name="nd" rows="5" cols="44" maxlength="500" wrap="physical"
                    placeholder="Nội dung liên hệ" required></textarea></td>
              </tr>
              <tr>
                <td></td>
                <td><button type="submit">Gửi thông tin liên hệ</button></td>
              </tr>
            </table>
          </form>
        </div>
        <div class="thongtinnhom">
          <p style="font-size: 22px; color: gray">Thông tin thành viên nhóm: </p>
          <hr />
          <table>
            <tr>
              <th>Họ tên</th>
              <th>MSSV</th>
              <th>Lớp</th>
            </tr>
            <script>
              var thongtin = [
                  ["Nguyễn Trọng Đạt", "CD213125", "UDPM2"],
                  ["Phùng Văn Hiếu", "CD212864", "UDPM2"],
                  ["Nguyễn Nhân Hiếu", "CD212864", "UDPM2"]
              ]
              for (var i = 0; i < thongtin.length; i++) {
                  document.write(
                      `
                      <tr>
                          <td>` +
                      thongtin[i][0] + `</td>
                          <td>` +
                      thongtin[i][1] + `</td>
                          <td>` +
                      thongtin[i][2] + `</td>
                      </tr>
                  `
                  )
              }
            </script>
          </table>
        </div>

      </div>
    </div>
  </section>

  <?php addContainTaiKhoan(); ?>

  <div class="footer">
    <?php addPlc(); addFooter(); ?>

  </div>

  <i class="fa fa-arrow-up" id="goto-top-page" onclick="gotoTop()"></i>

</body>

</html>