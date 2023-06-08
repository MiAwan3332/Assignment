<!DOCTYPE html>
<html>
<head>
  <title>Two-Step Form</title>
  <style>
    body {
      background-color: #f1f1f1;
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      margin-top: 50px;
      padding: 50px;
      background-color: #ffffff;
      box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
    }

    h2 {
      margin-bottom: 20px;
      color: #202124;
      font-size: 24px;
      text-align: center;
    }

    label {
      display: block;
      margin-top: 15px;
      color: #5f6368;
      font-size: 14px;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ddd;
      border-radius: 3px;
      font-size: 14px;
    }

    button {
      display: block;
      margin-top: 30px;
      background-color: #4285f4;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      font-size: 14px;
      text-align: center;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #3367d6;
    }
  </style>
</head>
<body>
  <div class="container">
    <form id="twoStepForm" action="/addForm" method="post">
        @csrf
      <div id="step1">
        <h2>Step 1</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="cnic">CNIC:</label>
        <input type="text" id="cnic" name="cnic" required>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required>
        <button type="button" onclick="nextStep()">Next</button>
      </div>
      
      <div id="step2" style="display: none;">
        <h2>Step 2</h2>
        <label for="address">Skill 1:</label>
        <input type="text" id="skill_1" name="skill_1" required>
      
        <label for="phone">Skill 2:</label>
        <input type="text" id="skill_2" name="skill_2" required>
        <label for="phone">Skill 3:</label>
        <input type="text" id="skill_3" name="skill_3" required>
        <label for="phone">Skill 4:</label>
        <input type="text" id="skill_4" name="skill_4" required>
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>
  
  <script>
    function nextStep() {
      var email = document.getElementById('email').value;
      var name = document.getElementById('name').value;
      var cnic = document.getElementById('cnic').value;
      var phone = document.getElementById('phone').value;
      if (email === '' || name === '' || cnic === '' || phone === '') {
        alert('Please fill all the fields');
        return false;
      } else {
        document.getElementById('step1').style.display = 'none';
        document.getElementById('step2').style.display = 'block';
      }
    }
  </script>
</body>
</html>
