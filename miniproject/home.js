// Import Firebase SDKs
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js";
import { getAuth, onAuthStateChanged, signOut} from "https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js";
import { getFirestore, doc, getDoc } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-firestore.js";

const firebaseConfig = {
  apiKey: "AIzaSyAcbZrdJeQxQwQaIW1_VAwSiNTJNQLqxyc",
  authDomain: "lancercom-871f2.firebaseapp.com",
  projectId: "lancercom-871f2",
  storageBucket: "lancercom-871f2.firebasestorage.app",
  messagingSenderId: "243857905711",
  appId: "1:243857905711:web:eda055f854668ca6c74eda",
  measurementId: "G-TJ79MCZWFC"
};

const app = initializeApp(firebaseConfig);
const auth = getAuth(app);
const db = getFirestore(app);
const authLink = document.getElementById('authLink'); // or 'authBtn' for button

document.addEventListener("DOMContentLoaded", () => {
  // All DOM manipulation code should go inside this block

  function searchSkill() {
    let searchQuery = document.getElementById("search").value;
    if (searchQuery.trim() !== "") {
      alert("Searching for: " + searchQuery);
    } else {
      alert("Please enter a skill to search.");
    }
  }

  document.querySelector(".see-all").addEventListener("click", function() {
    alert("More skills coming soon!");
  });

  function toggleInfo(optionId) {
    const extraInfo = document.getElementById(`${optionId}-info`);
    if (extraInfo.style.display === 'block') {
      extraInfo.style.display = 'none';
    } else {
      extraInfo.style.display = 'block';
    }
  }

  document.querySelectorAll('.option').forEach(option => {
    option.addEventListener('click', function() {
      document.querySelectorAll('.option').forEach(opt => {
        opt.classList.remove('selected');
      });
      this.classList.add('selected');

      const form = document.getElementById('agreement-form');
      form.style.display = 'block';

      const selectedOptionInput = document.getElementById('selected-option');
      const optionName = this.querySelector('h3').textContent;
      selectedOptionInput.value = optionName;
    });
  });

 /* document.getElementById('agreement-form-data').addEventListener('submit', function(e) {
    e.preventDefault();

    const projectName = document.getElementById('project-name').value;
    const amount = document.getElementById('amount').value;
    const dueDate = document.getElementById('due-date').value;
    const selectedOption = document.getElementById('selected-option').value;

    alert(`Agreement Created!\nPayment Option: ${selectedOption}\nProject: ${projectName}\nAmount: $${amount}\nDue Date: ${dueDate}`);

    this.reset();
    document.getElementById('agreement-form').style.display = 'none';
  });*/

  const reviews = [
    {
      text: "Lancer.com helped us find an amazing transcriptionist. She is fast, accurate, and affordable!",
      img: "https://randomuser.me/api/portraits/men/1.jpg",
      name: "Ed Bagley",
      role: "Director of Product Marketing, O.C. Tanner Company"
    },
    {
      text: "I found the perfect designer for my project through Guru. The process was seamless!",
      img: "https://randomuser.me/api/portraits/women/2.jpg",
      name: "Sarah Johnson",
      role: "Creative Director, Design Studio"
    },
    {
      text: "Lancer's.com platform helped us connect with top-tier freelancers worldwide. Highly recommended!",
      img: "https://randomuser.me/api/portraits/men/3.jpg",
      name: "Michael Brown",
      role: "CEO, Tech Solutions Inc."
    }
  ];

  let currentIndex = 0;

  function updateReview(index) {
    document.getElementById("testimonial-text").textContent = reviews[index].text;
    document.getElementById("client-img").src = reviews[index].img;
    document.getElementById("client-name").textContent = reviews[index].name;
    document.getElementById("client-role").textContent = reviews[index].role;
  }

  function prevReview() {
    currentIndex = (currentIndex === 0) ? reviews.length - 1 : currentIndex - 1;
    updateReview(currentIndex);
  }

  function nextReview() {
    currentIndex = (currentIndex === reviews.length - 1) ? 0 : currentIndex + 1;
    updateReview(currentIndex);
  }

  // Firebase Auth state listener (moved inside DOMContentLoaded)
  const loginBtn = document.getElementById("auth-btn"); // Make sure this ID matches your HTML

  if (!loginBtn) {
    console.warn("Login button (auth-btn) not found in DOM!");
    return;
  }

  onAuthStateChanged(auth, (user) => {
    if (user) {
      alert(`Hello, ${user.displayName || user.email}!`);
      loginBtn.textContent = "Logout";

      loginBtn.addEventListener("click", () => {
        signOut(auth).then(() => {
          alert("Logged out successfully!");
          window.location.href = "home.html";
        });
      });
    } else {
      
      loginBtn.textContent = "Login";

      loginBtn.addEventListener("click", () => {
        window.location.href = "login1.html";
      });
    }
  });
});