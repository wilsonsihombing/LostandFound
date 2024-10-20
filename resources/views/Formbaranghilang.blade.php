body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 20px;
  background: url('images/background.jpg') no-repeat center center fixed;
  background-size: cover;
}

.sidebar {
  width: 250px;
  height: 100vh;
  background: #2c3e50;
  color: #ecf0f1;
  position: fixed;
  top: 0;
  left: 0;
  transition: all 0.3s;
  overflow-y: auto;
  opacity: 0.9;
}

.sidebar-header {
  background: #f4623a;
  opacity: 0.9;
  padding: 20px;
  text-align: center;
}

.sidebar ul {
  list-style: none;
  padding: 0;
}

.sidebar ul li {
  padding: 15px;
  border-bottom: 1px solid #34495e;
}

.sidebar ul li a {
  color: #ecf0f1;
  text-decoration: none;
  display: flex;
  align-items: center;
  transition:0.3s;
}

.sidebar ul li a i {
  margin-right: 10px;
}

.sidebar ul li a:hover {
  background: #16a085;
}

.container {
  max-width: 700px;
  margin: auto;
  padding: 20px;
  background-color: #ffff;
  opacity: 0.9;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
  text-align: center;
}

.form-group {
  margin-bottom: 10px;
}

.form-group label {
  display: block;
  margin-bottom: 5px;
}

.form-group input, 
.form-group textarea, 
.form-group select {
  width: 95%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.form-group button {
  width: 100%;
  padding: 10px;
  background-color: #f4623a;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.form-group button:hover {
  background-color: #f4623a;
}

.back-button {
  width: 100%;
  padding: 10px;
  background-color: #f4623a;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 10px;
  text-align: left;
}



