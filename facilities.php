<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Goodwill Fitness Center</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #800000, black, #800000);
      min-height: 100vh;
    }

    .gallery {
      max-width: 1200px;
      margin: 50px auto;
      padding: 0 20px;
    }

    .gallery h2 {
      text-align: center;
      margin-bottom: 100px;
      font-size: 2rem;
      color: white;
    }

    .gallery-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .gallery-item {
      background-color: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
    }

    .gallery-item:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }

    .gallery-item img {
      width: 100%;
      height: auto;
      display: block;
    }

    .gallery-caption {
      padding: 15px;
      text-align: center;
      font-size: 1rem;
      color: black;
    }
    .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 50px;
            color: white;
            text-decoration: none;
            cursor: pointer;
            font-weight: 500;
        }
        .close-btn:hover {
            color: #ff0000;
        }

    @media (max-width: 600px) {
      .gallery h2 {
        font-size: 1.5rem;
      }

      .gallery-caption {
        font-size: 0.95rem;
      }
    }
  </style>
</head>
<body>
    <a href="about.php" class="close-btn" title="Close">&times;</a>
  <section class="gallery">
    <h2>FACILITIES</h2>
    <div class="gallery-grid">
      <div class="gallery-item">
        <img src="images\img1.jpg" alt="Gallery Image 1">
      </div>
      <div class="gallery-item">
        <img src="images\img2.jpg" alt="Gallery Image 2">
      </div>
      <div class="gallery-item">
        <img src="images\img3.jpg" alt="Gallery Image 3">
      </div>
      <div class="gallery-item">
        <img src="images\img4.jpg"s alt="Gallery Image 4">
      </div>
    </div>
  </section>

</body>
</html>
