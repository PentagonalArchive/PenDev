/*! Util JS 
 * Small File javascript function
 * collection Without jQuery as User Authentication Helper
 * @author awan <nawa (at) yahoo (dot) com>
 * Content : 1. getScore
 *           2. validateEmail
 *           3. validateUsername
 *           4. isStrongPassword
 *           5. isNumeric
 *           6. generatePassword
 *           7. createCookie
 *           8. readCookie
 *           9. deleteCookie
 *            
-------------------------------- */

/*!
 * global zxcvbn
 * Get scores of password meter
 * You could download the zxcvbn.js thorough dropbox 
 * @see {https://tech.dropbox.com/2012/04/zxcvbn-realistic-password-strength-estimation/}
 */
function getScore(value)
{
  /*!
   * Get Password length
   */
  var length = value.length;
  var score;
  /*!
   * Using Try to handle Unloading zxcvbn.js 
   * try to get score from zxcvbn js else use 
   * strong password 
   */
  try{

    score = zxcvbn(value).score
  } catch(err) {

    var regex      = /^(?=.*[a-z])(?=.*[A-Z]).+$/im,
        regex2     = /^(?=.*[a-z])((\S|\s){8,})$/im,
        stdtest    = (regex2.test(value) ? 2 : ''),
        strongtest = (stdtest == 2 && regex.test(value) ? 3 : stdtest),
        score      = (strongtest == 3 && isStrongPassword(value) ? 4 : strongtest);
  }

  switch(score) {
    case 1:
    case 2:
        return 'moderate';
      break;
    case 3:
        return 'good';
      break;
    case 4:
        return 'strong';
      break;
    default:
      if(length <= 0 ) {
        return 'blank';
      } else if(length < 6 ) {
        return 'short'
      } else if(length > 6 ) {
        return 'bad';
      }
    break;
  }

  return 'bad';
}

/*!
 * Validate Emails, using PHP REGEX VALDIATE EMAIL
 *
 * @param string email the email address
 */
function validateEmail(email)
{
  var re = /^(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){255,})(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){65,}@)(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22))(?:\.(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-[a-z0-9]+)*\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-[a-z0-9]+)*)|(?:\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\]))$/im;
  return re.test(email);
}

/*!
 * Validate Username
 *
 * @param string username minimal 3 characters maximal 30 characters
 * @return bool
 */
function validateUsername(username)
{
  var re = /(?=.{3,30}$)^[a-zA-Z][a-zA-Z0-9]+(?:[_-][A-Za-z0-9]+)*$/im;
  return re.test(username);
}

/*!
 * Check if password strong using simple regex
 *
 * minimal 8 characters
 * @param string str the string of password to check
 * @return bool
 */
function isStrongPassword(str)
{
  re  = /^(?:(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[\~\\\.\+\*\?\^\$\[\]\(\)\|\{\}\'\#\_\-\&\%\@\=\"\!\<\>\`\;\:\s])((\S|\s|\d){8,})|(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[\~\\\.\+\*\?\^\$\[\]\(\)\|\{\}\'\#\_\-\&\%\@\=\"\!\<\>\`\;\:])((\w|\s|\S|\d){8,}))$/im;
  return re.test(str);
}

/*!
 * Validate the values is numeric
 *
 * @param string value is value
 * @return bool 
 */
function isNumeric(value)
{
  re = /^\d*?$/;
  return re.test(value);
}

/**
 * Generate Random string password
 *
 * @param integer l as length mimnimal 8
 * @return string random characters
 */
function generatePassword(l)
{
  var num = isNumeric(l);
  if(!num || num && l.length <= 8 ) {
    var rt = 8;
  } else {
    var rt = l;
  }

  var str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789~!@#$%^&*()_+-={}[]:;|<>?/';
  text = '';
  for( var i=0; i < rt ; i++ ) {
    text += str.charAt(Math.floor(Math.random() * str.length));
  }
  
  // validate is strong?
  var s = isStrongPassword(text);
  if(! s ) {
    console.log(text);
    return generatePassword(rt);
  }
  return text;
}

/*!
 * Set cookie name and expires
 *
 * @param string name the cookie name
 * @param string value the cookie values
 * @param mixed  days the expires of the day
 * @return void
 */
function createCookie(name,value,days)
{
  var expires = "";
  if (days) {
    var date = new Date();
    date.setTime(date.getTime()+(days*24*60*60*1000));
    expires = "; expires="+date.toUTCString();
  }
  document.cookie = name+"="+value+expires+"; path=/";
}

/*!
 * Read the cookie
 *
 * @param string name the cookie name
 * @return string the cookie value if exist else null
 */
function readCookie(name)
{
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') {
      c = c.substring(1,c.length);
    }
    if (c.indexOf(nameEQ) == 0) {
      return c.substring(nameEQ.length,c.length);
    }
  }
  return null;
}

/*!
 * Delete the cookie
 *
 * @param string name the cookie name to delete
 * @return void
 */
function deleteCookie(name)
{
  createCookie(name,"",-1);
}