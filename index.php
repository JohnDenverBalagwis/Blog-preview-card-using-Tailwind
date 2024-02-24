<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon-32x32.png">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="style.css">
  <title>Frontend Mentor | Blog preview card</title>


</head>

<body>
  <div class="main__container h-screen flex flex-col gap-5 justify-center items-center">
    <div class="card h-auto w-64 rounded-lg  border-solid border-r-4 border-b-4 border-black bg-white overflow-auto">
      <div class="card-image overflow-hidden rounded-md my-4 mx-4">
        <img src="./assets/images/illustration-article.svg" alt="">
      </div>
      <div class="card-content text-left  text-base mb-4 mx-4 flex flex-col gap-2">
        <button class="btn-learn inline w-24 px-4 py-2 rounded-md  font-bold text-center">Learning</button>
        <p class="title font-medium">Published 21 Dec 2023</p>
        <h1 class="font-bold text-lg">HTML & CSS foundations</h1>
        <p class="about text-left text-pretty font-normal">These languages are the backbone of every website, defining structure, content, and presentation.</p>
        <div class="profile flex flex-row justify-start items-center px-0 mt-0">
          <div class="profile-image size-8 rounded-full">
            <img src="./assets/images/image-avatar.webp" alt="Profile-Pic">
          </div>
          <div class="profile-name text-left font-bold mx-2">
            <h1>John Denver</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="attribution">
      Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>.
      Coded by <a href="#">John Denver Balagwis</a>.
    </div>
  </div>


</body>

</html>