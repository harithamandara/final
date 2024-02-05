<x-app-layout>
    
    

<!-- <a href="\">
   <button style=>Home page</button></a> -->
   <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfinad Dashboard</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f5f5f5;
    }

    .dashboard {
      display: flex;
      height: 100vh;
    }

    .sidebar {
      width: 250px;
      background-color: #333;
      color: #fff;
      padding: 20px;
    }

    .profile-picture {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      overflow: hidden;
      margin-bottom: 10px;
    }

    .profile-picture img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .user-info {
      text-align: center;
      margin-bottom: 20px;
    }

    .user-info h2 {
      margin-bottom: 5px;
    }

    .user-info p {
      margin: 0;
      font-size: 14px;
      color: #ccc;
    }

    .main-content {
      flex: 1;
      padding: 20px;
    }

    .welcome-heading {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .update-form {
      max-width: 400px;
      margin: 0 auto;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    button {
      background-color: #333;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="dashboard">
    <div class="sidebar">
      <div class="profile-picture">
      <img src="assets/images/profile-02.png" alt="" >
      </div>
      <div class="user-info">
        <h2>User Name</h2>
        <p>user.email@gmail.com</p>
        <p>Phone: +1234567890</p>
        <p>Age: 25</p>
        <p>Occupation: Developer</p>
        <p>Address: 123 Main St, City</p>
      </div>
    </div>
    <div class="main-content">
      <h1 class="welcome-heading">Welcome to Perfinad! Make Your Dreams Come True</h1>
      <div class="update-form">
        <form>
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
          </div>
          <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" placeholder="Enter your age">
          </div>
          <div class="form-group">
            <label for="occupation">Occupation:</label>
            <input type="text" id="occupation" name="occupation" placeholder="Enter your occupation">
          </div>
          <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" placeholder="Enter your address">
          </div>
          <button type="submit">Update Profile</button>
        </form>
      </div>
    </div>
  </div>
</body>
</x-app-layout>
