var listPhim = [
  {
    id: 0,
    ten: "Cảnh sát trưởng Labrado",
    thoiLuong: 20,
    banner: "./assets/banner.jpg",
    trailer: "https://www.youtube.com/embed/vGvCnjY_4Tc?si=f1wDQeMXsUGVcwdC",
  },
  {
    id: 1,
    ten: "Zootopia",
    thoiLuong: 15,
    banner: "./assets/zootopia.jpg",
    trailer: "https://www.youtube.com/embed/vGvCnjY_4Tc?si=f1wDQeMXsUGVcwdC",
  },
];

function xemTrailer() {
  // Ẩn banner
  document.getElementsByClassName("banner")[0].style = "display: none";

  // Hiển thị trailer
  document.getElementsByClassName("banner")[1].style = "dispaly: block";
  document.getElementsByClassName("banner")[1].style = "dispaly: block";
}

function doiBanner(src) {
  var bannerHienTai = document.getElementsByClassName("banner-anh");

  bannerHienTai[0].src = src;
  bannerHienTai[1].src = src;
}
