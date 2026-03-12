# MilaPress 📁
A specialized PHP CLI tool for high-efficiency text compression and secure data restoration.

# Features ✨
* 📄 Smart Compression: Optimized specifically for .txt files using Zlib (level 9).
* 🔄 Reverse Mode: A unique binary reversal step for custom data formatting.
* 🔐 Base64 Encoding: Ensures compressed data is safe for storage and transfer.
* 📈 Efficiency Tracking: Real-time calculation of space saved (percentage).
* 🛡️ Integrity Checks: Built-in validation for file paths and formats.
* 📂 Automatic Restoration: Seamlessly brings your data back to its original state.

# Technologies 🛠
* PHP
* Compression Functions (gzcompress, gzuncompress)
* Data Handling (base64_encode, base64_decode, strrev)
* Filesystem Functions (file_put_contents, file_get_contents, file_exists)

# Installation 🚀
Follow these steps to get **MilaPress** up and running on your local machine:

* 🔵 **Step 1: Clone the repository** Open your terminal and run the following command to copy the project:
  ```bash
  git clone [https://github.com/your-username/MilaPress.git](https://github.com/your-username/MilaPress.git)

* 🔵 Step 2: Enter the project directory Switch to the folder where the project was cloned:
  cd MilaPress

* 🔵 Step 3: Check PHP version MilaPress requires PHP to run. Make sure you have it installed:
  php -v

* 🔵 Step 4: Launch the program Start the CLI application by running the main file:
  php index.php

# Author 👩‍💻
Milena
Frontend / PHP Developer

# About the Project 💡
**MilaPress** is a custom Command Line Interface (CLI) tool designed to demonstrate advanced data manipulation using PHP. While simple in appearance, it implements a sophisticated pipeline to transform, secure, and restore text data.

### Why this project? 🎯
The main goal of this project was to practice complex logic and understand how data can be transformed at a binary level. It covers:
* 🔵 **Data Normalization:** Handling different line endings (`\r\n`, `\n`) and cleaning string inputs.
* 🔵 **Algorithmic Thinking:** Implementing a multi-step process (Compress ➔ Reverse ➔ Encode).
* 🔵 **Resource Efficiency:** Calculating real-world compression ratios to see how much disk space is saved.
* 🔵 **Error Resiliency:** Developing a system that detects corrupted files or invalid formats before processing.

### The Transformation Pipeline ⚙️
When you "Press" a file with MilaPress, it doesn't just zip it. It follows these logical steps:
1. **Clean:** Trims unnecessary characters and standardizes the text.
2. **Shrink:** Uses Zlib compression to reduce the size by up to 80%.
3. **Flip:** Reverses the entire binary string, making the file unreadable to standard text editors.
4. **Shield:** Encodes everything into Base64 for safe storage.

This project is a perfect example of how PHP can be used for more than just web pages—it's a powerful tool for filesystem management and data engineering.
