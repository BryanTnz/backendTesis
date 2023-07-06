<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sprint2 (Login,Logout,Register,ResetPassword)
<hr>

## Login
http://127.0.0.1:8000/api/login <br>
{<br>
    "email":"hansen.mitchell@example.org",<br>
    "password":"secret"<br>
}<br>
![image](https://github.com/BryanTnz/backendTesis/assets/66330281/c51b7d1d-d6a7-4474-8c1a-6d8c32a47f52)
<hr>

## Login
http://127.0.0.1:8000/api/logout<br>
![image](https://github.com/BryanTnz/backendTesis/assets/66330281/40e01aad-8ee9-48bc-8ecf-0e06d93be04e)
<hr>

## Register
http://127.0.0.1:8000/api/register
![image](https://github.com/BryanTnz/backendTesis/assets/66330281/2b085cae-1f93-4afa-9d32-6372ddf70a3c)

## Reset Password (ForgotPassword, ResetPassword)
ForgotPassword(Envio de link de restablecimiento al email)<br>
http://127.0.0.1:8000/api/forgot-password<br>
![image](https://github.com/BryanTnz/backendTesis/assets/66330281/4a2496ad-23e3-4ade-9a96-1a021fb2c1d9)
![image](https://github.com/BryanTnz/backendTesis/assets/66330281/da84a439-df03-474a-95db-78761bd89615)
![image](https://github.com/BryanTnz/backendTesis/assets/66330281/6e980c22-2944-47ee-92f8-f2ee527df48e)

## ResetPassword
http://127.0.0.1:8000/api/reset-password<br>
Password: 10 caracteres, Mayusculas, minusculas, numeros, simbolos<br>
{<br>
    "token":"81cc4a32a0ec42cf07a37a5089e1643126c45042351b26433afd6193dd171915",<br>
    "email":"Maria@gmail.com",<br>
    "password":"Abc123456*",<br>
    "password_confirmation":"Abc123456*"<br>
}<br>
![image](https://github.com/BryanTnz/backendTesis/assets/66330281/8e5e2915-6b33-447e-bf83-f2aa26462ab4)

## UpdatedPassword
![image](https://github.com/BryanTnz/backendTesis/assets/66330281/ee11ad6e-1bf2-4d8a-bf32-c7ba9be500e6)

http://127.0.0.1:8000/api/update-password<br>
Password: 10 caracteres, Mayusculas, minusculas, numeros, simbolos<br>
{<br>
    "password":"ABCabc123*",<br>
    "password_confirmation":"ABCabc123*"<br>
}<br>
![image](https://github.com/BryanTnz/backendTesis/assets/66330281/b4a9368c-6f98-4af0-b75f-e37dbe7c282a)
![image](https://github.com/BryanTnz/backendTesis/assets/66330281/26aaa907-9a6c-41ef-bdc1-bcce6b6d6bbd)


