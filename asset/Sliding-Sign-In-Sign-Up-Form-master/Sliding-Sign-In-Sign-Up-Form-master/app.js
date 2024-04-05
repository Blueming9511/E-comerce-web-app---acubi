const sign_in_btn = document.querySelector('#sign-in-btn')
const sign_up_btn = document.querySelector('#sign-up-btn')
const container = document.querySelector('.container')

sign_up_btn.addEventListener('click', () => {
  container.classList.add('sign-up-mode')
})

sign_in_btn.addEventListener('click', () => {
  container.classList.remove('sign-up-mode')
})

function validateSignIn () {
  let txtUserName = document.getElementById('usernameSI')
  console.log('HIHI')
  let username = txtUserName.value
  let txtPwd = document.getElementById('pwdSI')
  let pwd = txtPwd.value

  let errorMsg_user = document.querySelector('.errorMessageSI1')
  let errorMsg_pwd = document.querySelector('.errorMessageSI2')

  if (username == null || username == '') {
    errorMsg_user.style.display = 'block'
    errorMsg_user.innerText = 'Please enter your username'
  } else {
    errorMsg_user.style.display = 'none'
  }
  if (pwd == null || pwd == '') {
    errorMsg_pwd.style.display = 'block'
    errorMsg_pwd.innerText = 'Please enter your password'
  } else {
    if (pwd.length < 6) {
      errorMsg_pwd.style.display = 'block'
      errorMsg_pwd.innerText =
        'Your password must contain at least 6 characters'
    } else {
      errorMsg_pwd.style.display = 'none'
    }
  }

  if (
    errorMsg_pwd.style.display == 'none' &&
    errorMsg_user.style.display == 'none'
  ) {
    return true
  }
  return false
}

function validateSignUp () {
  let txtUsernameSU = document.getElementById('usernameSU')
  let txtEmailSU = document.getElementById('emailSU')
  let txtPwdSU = document.getElementById('pwdSU')

  let errorMsgUsernameSU = document.querySelector('.errorMessageSU1')
  let errorMsgEmailSU = document.querySelector('.errorMessageSU2')
  let errorMsgPwdSU = document.querySelector('.errorMessageSU3')

  let usernameSU = txtUsernameSU.value
  let emailSU = txtEmailSU.value
  let pwdSU = txtPwdSU.value

  if (usernameSU == '' || usernameSU == null) {
    errorMsgUsernameSU.style.display = 'block'
    errorMsgUsernameSU.innerText = 'Please enter your username'
  } else {
    errorMsgUsernameSU.style.display = 'none'
  }

  if (emailSU == '' || emailSU == null) {
    errorMsgEmailSU.style.display = 'block'
    errorMsgEmailSU.innerText = 'Please enter your email'
  } else {
    if (!isValidEmail(emailSU)) {
      errorMsgEmailSU.style.display = 'block'
      errorMsgEmailSU.innerText = 'Please enter a valid email address'
    } else {
      errorMsgEmailSU.style.display = 'none' // Hide email error message if valid
    }
  }

  // Validate password
  if (pwdSU == '' || pwdSU == null) {
    errorMsgPwdSU.style.display = 'block'
    errorMsgPwdSU.innerText = 'Please enter your password'
  } else {
    if (pwdSU.length < 6) {
      errorMsgPwdSU.style.display = 'block'
      errorMsgPwdSU.innerText =
        'Your passwsssord must contain at least 6 characters'
    } else {
      errorMsgPwdSU.style.display = 'none' // Hide password error message if valid
    }
  }

  // Return true if all error messages are hidden
  return (
    errorMsgUsernameSU.style.display == 'none' &&
    errorMsgEmailSU.style.display == 'none' &&
    errorMsgPwdSU.style.display == 'none'
  )
}

// Function to validate email format
function isValidEmail (email) {
  const emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
  return emailRegex.test(email)
}

const pwd = document.getElementById('pwdSI')
pwd.oninput = function () {
  let pwd = document.getElementById('pwdSI').value
  let errorMsg_pwd = document.querySelector('.errorMessageSI2')

  if (errorMsg_pwd) {
    if (
      pwd != null &&
      pwd != '' &&
      errorMsg_pwd.innerText === 'Please enter your password'
    ) {
      errorMsg_pwd.innerHTML =
        'Your passwsssord must contain at least 6 characters'
    } else {
      if (pwd.length >= 6 && errorMsg_pwd) {
        errorMsg_pwd.style.display = 'none'
      }
    }
  }
}

const usernameSI = document.getElementById('usernameSI')
usernameSI.oninput = function () {
  let errorMsg_user = document.querySelector('.errorMessageSI1')
  if (errorMsg_user) {
    if (usernameSI != '' && usernameSI != null) {
      errorMsg_user.style.display = 'none'
    }
  }
}

const usernameSU = document.getElementById('usernameSU')
usernameSU.oninput = function () {
  let errMsg = document.querySelector('.errorMessageSU1')
  if (errMsg) {
    if (usernameSU != '' && usernameSU != null) {
      errMsg.style.display = 'none'
    }
  }
}

const pwdSU = document.getElementById('pwdSU')
pwdSU.oninput = function () {
  let pwd = document.getElementById('pwdSU').value
  let errorMsg_pwd = document.querySelector('.errorMessageSU3')

  if (errorMsg_pwd) {
    if (
      pwdSU != null &&
      pwdSU != '' &&
      errorMsg_pwd.innerText == 'Please enter your password'
    ) {
      errorMsg_pwd.innerHTML =
        'Your passwsssord must contain at least 6 characters'
    } else {
      if (pwd.length >= 6 && errorMsg_pwd) {
        errorMsg_pwd.style.display = 'none'
      }
    }
  }
}

const emailSU = document.getElementById('emailSU')
emailSU.oninput = function () {
  let emailSU = document.getElementById('emailSU').value
  let errMsg = document.querySelector('.errorMessageSU2')

  if (errMsg) {
    if (
      emailSU != null &&
      emailSU != '' &&
      errMsg.innerText == 'Please enter your email'
    ) {
      errMsg.innerHTML = 'Please enter a valid email address'
    } else {
      if (!isValidEmail(emailSU) && errMsg) {
        errMsg.style.display = 'none'
      }
    }
  }
}
