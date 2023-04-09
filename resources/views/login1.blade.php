<html>
    <head>
        <title> Hoospital Sponsored By Daud and Hanzla </title>
        <link rel="stylesheet" href="/css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
    </head>
    <body>
    <section id="nav-bar">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

            <div class="container-fluid">
              <a class="navbar-brand" href="#"> H&D HOSPITAL </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index">HOME</a>
                  </li>
                  
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="register">Registration</a></li>
                      <li><a class="dropdown-item" href="ap">Appointment</a></li>
                      <li><a class="dropdown-item" href="find">Find Doctor</a></li>
                    
                      <li><a class="dropdown-item" href="lab">Lab Report</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="cov">Covid 19 updates</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#aboutus">ABOUT US</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#testimonials">TESTIMONIALS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#social-media">CONTACT US</a>
                  </li>
                  <?php
                   if(session()->has('id')) 
                   {
                  echo '<li class="nav-item"><a class="nav-link" href="viewappointment">VIEW Appointment</a></li>';
                  echo '<li class="nav-item"><a class="nav-link" href="view">VIEW Doctors</a></li>';
                  echo '<li class="nav-item"><a class="nav-link" href="nurse">Nurse</a></li>';
                 // 
                  
                   }

                  ?>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Login
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     
                    <li><a class="dropdown-item" href="login">Login As Patient</a></li>
                      <li><a class="dropdown-item" href="login1">Login As Doctor</a></li>
             
                
                    </ul>
                  </li>
                 
                </ul>
              
              </div>
            </div>
          </nav>
         
    </section>
        <section class="vh-100">
            <div class="container-fluid h-custom">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                  <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhMQERIWFRUWGBcVEhYVFxkWGRYYFRIWGhgXGRYYHiggGxolGxcVITIhJSkrLi4uFyIzODMsNygtLysBCgoKDg0OGxAQGy0mICU3MS0tLS4tLTU1Ly0tLy8tLS0uKy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAMIBBAMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABgcDBAUCAQj/xABMEAABAwIDBQUDBgkJCAMAAAABAAIDBBEFEiEGMUFRYQcTInGRMoGhI0JSYnKxFDOCk6KywdHwFUNEU1SS0uHxJWNkdISjs8IXJDT/xAAaAQEAAwEBAQAAAAAAAAAAAAAAAgMEAQUG/8QAMxEAAgECBAMGBQQCAwAAAAAAAAECAxEEITFBEmHwIlFxgZGhBRMywdEUorHhQvEjQ1L/2gAMAwEAAhEDEQA/ALxREQBERAEXxc+txumh/G1ETOjntB9L3TUPLNnRRQuv7SqCO+V75SOEbD+s/KPRRbFO1uU3FNA1nJ0hLz/dbYA+8qyNGb2M8sVSjrL0zLc6qKY3t9RU92mTvXj5sVn+rrho9bqmcX2kqqm/fzvc36F8rP7jbD4LkF4V8cMv8mZKnxB/4L1/Bak3a8b+CkFvrS6+gZou1s72l09Q8RTMMD3aNLnBzCeWewsfMW6qke9C9Kx4em1kURxlZO7d/T7WP1Oirfsw2x71raKod8q0Whcf5xoHsk/TA9R5G9kLFOLi7M9enUjUjxRNesqmxRvlkOVjGlzjyDRcqj9pttaqqc4skdDCCckbHFpI5vcNSem771Zfak9ww2fLxMYd5GVt/wBiocPNrXWnDQi1xM87H1ppqEXbc3KPF54nZ4p5GO33a9wv5i+vvVv9nW2RrAYJ7d+wZswFhI29ibcHAkXHW46UmpJ2cSOGJUuXi54Pl3L7q2tTTi2Z8NWlGolfJn6CRFo4riUdPE+eZ2VjRcnnyAHEk6ALzz3G7amDH8dgpI+9nflG5oGrnHk1vE/AcVAKntd8R7uku3gXyWJ9waQPUqCbU4/JWzumfo3dEzgxl9B58SeJ9y4znWW2nh4pdrU8itjpuVqehcOGdrFO4gTwPi+s0iRo89A70BU3wvF4KluenlZIOOU6jzbvHvC/MwkWanqHMcHxvLXDc5pLSPIjUJLDxejsdhjqkfqV/Y/UaKicK7Sa6Gwe9szeUo1t0e2xv1N1LsN7WYHWE8EkZ4lhEjf2H4FUSoTW1zZDGUpb28erFkIo9Q7a0EtslVGCeEl4z6PAXbgnY8XY5rhzaQR8FU01qaIyUvpdzMiIuEgiIgCIiApDaHa3E6epmhfO5hDjlGSPLkJOUtu03aRb/VaH/wAg4l/aT+bi/wACufHNnqeraG1EYdb2Xbnt+y4ajy3Kr9oNlsMppTC+tlY8AOLTEZLB27xNaAtlOpCWXDn4HmV6NWLup5eNjiu2+xE/0p3uZGPuatWfa6vdvrJfyXln6tluGgwof02d/wBmny/rFY3Pwtu5tZKfrOijafQOKt7C0j7Gb/k3qfu/BxanEJpPxk0j/tvc77yteOMk5WgkncALn0C7hxunZ+Jw+MHnLJJMfS7W/Ba5xGpmBYy4ZvcyFgiYBzc2MAW6uU033W65FTjFv6rvkn97HMkYWmzhY8Qd481jJXoheSFIrMbivK9EL4Qok0eVkjfwXiy+IjrVzbjeWkOaSCCCCDYgg3BBG4q1dke0xha2GuOVw0EwF2u+20ag9Rp5Komyc1lDlycIzVmSpVZ0neJ+kqpkFZTviEjZI5GlpLHB28aEEcQbH3Kg9o9n5qKUxTN017t49mRo4j4XG8LltNtRoeYW1RuLj4jfz1+9RpUXB2TyZLE4qNSN3HNc/wCjRc4BW32WbISQk11S3I4tLYGO0LWuOr3ciRoByJvvVP4gN/vW0ZXWsXEjlcrtSLneKdjlGcaTU2r+Z+gsc2yo6UHvJg543RxkPefMDRvm4hU1tdtXNXSAv8EbT8nEDcN+sT853X0UfXl0gUYUYwz3JVsVOrloj6TZYXG6OddFY2UpWC+gr5ZfQEOmQFegVjAWQKSIGUwOy58py/Stp7zuWON5abtJB5g2PqFtUBmBL4M4I3mMkEDrl1t8Fvw7QE/jqeCbmXxhjz+XGWuJ6m6429iSjF6u3l1/Bhp9oqtnsVUw6CV9vS9lvR7cYgN1W/3hrvvavjK7D3/jKOWLrFUZv0ZGn71lbBhTv56rj+3HG/8AUKh2d4+yLkp7VF6v7nodoOJf2o/m4/8AAh7QcS/tR/Nx/wCBeo8LwrjiMo/6Z3+an2y2wWHljKlpfUtcMzO90Z+bsL+TrquUqcVdx9vyiynTrzdlP91/4bGxNXiU9N30jmnM492ZW2JZZtiMjfZvmsf2WRT1rbCw3L4srqXeiPSVFpW4me1GtrNkYK5oL7slaLMlaNQPouHzm34ehF1JUUE2ndFkoqStLQpav7MXwtdJLWQsjG97g4bzYaczyuuK7D8Oj9utkn+rDBk/Tldb4K9sUw6OojdDMwPY4WcD8CCNQQeIVfVfZFGX3iqnMZ9F8Yefc4Ob9y0wr3+ptGCrheF3pxT8W/yQN2K0rPxFE0ng+okdKfPu25WX8wVrPqqmqIibmeN7Yo2ZWDqIowGjzsu1j9JS0EzofwWSZ7bWkncWRuNgbsjjALm+blx6rHZ5h3LSGRndDCwRsN+GRg8X5VytCV80vNmOTs+GT8orr7+BpVlKYzlc5pd84NcHZehcPDfyJstddlmDtiGasf3fKFtjM7oW7ox1fryaVypDmccrbXPhaLutc6AX1KnF3KpwcdcuRiIXgtW9X0LoSGSWDyLuZxZfcH8nccu8aXsdBhfA4Na4iwdct6gGxPlcEe48l26ZFprI1sq+ZVncwjeLbj7iLg+hCFutiNRvHklhc1y1ecq2bIW9N+o662+8H0XLHeIwi63MMvm1WxDg875GRMheXyNa+MBp8TXgFrgd2Wx37gphtDsi2hpadzjmnfIRK4XyjwEhjRyHPefgkZJSS7xOnKVOTtkkV1iA3+f7V9N1sxxB08TCLh0rGkcw6QAhTDbvYd9K8zQNc+mOtxdxj+q/6vJ3uOu+DklKz3LFTk6XElkiCEL5lW9UUr48udhbnaHszC12lxAcOhLT6LEWcLcviLhTSK+JmDKvoas1ky8bfwP9Qu2OXMeVeg1e3NIsSN4uOouRf1BHuXuogcx2VwsdD7nAEHyIIN+RSwMaLarMPfG1r/ajf7EjdWnm2/B44tOo8iCcuHxwPBjlcYn38Eti5n2ZGjUC/wA5t7X1B3jl8rneF3sehhszW9/Fd7G695GSch+tbxRn7QHS62I9oXHSoijqBzkbaT87GWvPvJWGSlqKVwlaXM+hNG67HfZlYbHyvfmFsDaFsn/6qaKc8XtHcynzfHYOP2mlR12v11uWp8OV3Hk8115MyNkw6T2mVFMfqOZMwdbODX/Erdw/ZKnqHCOmxCJzz7LJInxONhewBvc793JdzDeziOqhZPFLLTh1/k5ow8ix4EFl28jbVS/ZfYOno3CW5llG577ANuLHK0bj1NyqZVopZN3NUMNOTXFFW79PZP7EdwTsnDXh9XMHtH83GCA7zedbdAPerLghaxoYwBrWgBrQLAACwAHALMiySnKWp6FOjCmrRQREUSwIiIAiIgMU0DXiz2hw5OAI9CubXYHE+J8UQ7gvFu8hDY3jUHRwHHcehXXRDlrlV1HZCS67KzT60Vz6h4usGLbG1FE1ow+J0r3A95UXb3jDuyxsv4Lj5wu7XeFbaK3583rmZ/0lJfSrdcyjcH2AqXB89VE9kcYc9zBrLMWgnIxovYk6XPPQFaMGEVNXM6SSCRkbAXPyxuAjjjbcMjBGrsoytbvJNzxKv+yWU/1EtSH6KFkr+PPx5cih8C2fqKypMz6d7Ym3kcC0taWsHgiYSBe4DWacNVk2f2TrKgzzvgc093JkEg7vPLI0iwDrfScb7rgK9UXHiHshHBxVrvn4sqPCezOZ9I5szhDM6Vr2g2fZjGuFnZTYEl5OhPsjnpIarY2ghp6dtVr3IIz3LDJd5e5pa3UjM4kAbr710dqtp+4PcxAGS1yTuZfdpxPFRJ2GVtSe+dG5+bc45Rp5G1h5KqeIm3kediMVSot0qEHOaVnldLxtv/pvYmtFtPTO8LXFjW2GrSGtG4DTRo87LidrNjTQOGo70WPnG/8AcufRbI1TjZwEbTbNmLXaeQvdbXaLQiHD6eJpJDJmi53m7JLn1K7hXL5sbkoV8TVw9T58LK2umfdZ/wBeZU2HNvWUw51EQ9Zmr9FYli0cNu8dq72WtBc51t9gNT57l+esEbevpB/xUP8A52q49rdkpJ5fwineA+wa5pJbewsC1w3aaW3LVVjCVS03ZF2HnUhh3KnG7vp1r4GtiFRhmJPY2YuD26MJuwkE6szA2seR9y+4n2eMkrI6qOQMjaYy+LLfSINADTfQFrWjp8FFpNjq0f0cnycw/wDst3D9oaugcIZmOLBb5N+8N+q7l6jRWyw6/wCmd+V+utzPDGvXFU2s12rNeF+vI0YuzmpEtVHkHdmN/cyZm2JD2ujFr3BOUA3Fhc+/lYbsrVSwVMLqeRr4i2WLMwtzHVskbSRZxIDXC39X1V34bXMmibNGbtcLjmOYPUHRbdlk+fNZNdI9FYOm7NPL+U+sj8+U2B1E8L4hTyd7T3e0FjgXMc4Zo9R7QccwHEOfyC38D2emrY3Uz4nxywtLoZZGOa0tzC8MhI5uLmnUjxDduvSy+rrxD7gsHFPN32fPrvKJw/ZrE4HujFIXsdpJG/K6OQDdc5rA8nAgjmFJarsna8h8U5huAXRvb3uQkatDwW3AOmoVoWX1RdeV7rIlHB00rPPx29LEI2U2BFG/vPwmSS9w+MAMjfcEeNhzZrXuNVK4cNhYczIY2nm1jQfUBbiKuUnJ3ZfCnGCtFBERRJhERAEREAREQBERAEREAREQBERAEREOrUp+iqWvqmyz6tc+8l91i6+vT9it8FU9tBhxpp3ROFmknuncHAnQX5jcfJdDA9qJacBh8cY3NdoWjoeHluVMZcOTPk/h2M/RVJ0sQs283z596eqtnnpnlaShfao3/wCm08pWH9F4/authu1NNLYZ8jvovu347j6rm9p4vQkjX5SM/pH961UGnUjbvPfrVadbDTlTaas9H1bzKf2ZZfEqQf8AERn0kB/Yv0gvz7sPh8smI08jI3uYyXM94aS1oF97tw4K9a7EYYReWRrOWY6nyG8+5W4nOpZEMB2aN3obqhXaaYvwdodbvc3yfO3zvyd3vstfGO0NgBbTMLjwe4Wb5hu8++ygGJYg+V5lmeXOPE/AAcB0Cvw2FmpKcskjJj/iNJ03Sp9pvLl/fK25PuyupJZPGdzXMe38sOB/VCnyh3ZxhDoYHTSDK+YtdlO8MbfJfqczj7wpis2JkpVZNG/AwlHDwUtbfdte1giIqDWEREAREQBERAEREAREQBERAEREAREQBERAEREAREQGhieFxVDO7mYHDhzB5gqC4tsHKzM6meJB/Vv0I8j/AB5KyVy8dxeOmiMsmvBrRvc7gB+9c4ON23MWLwmHrRcqq037vt6pldYZs1UyF3eM7lrfafIfCLb7cT/Gq3ZMRoKZhiu6rINy0m0WYag2Oh9HKO45tBNVOvI6zb+FjdGt93E9StbC8IqKg2p4nPHF25g950Xo0sBCn2qr68T56nKnTnbDQvL/ANPN+UdF7s7FftpUyDJGWws3BsYtYfa3+llG56m5Jc4ucd+pcT5qUU2ykDZGxVVY0ym9oKcF7vC0uINgSNAd4XsbQUlKSykohnb86bVwPPJvHuIVksXQoq0F6fktq4erLtYqdvHN+UV/RycK2aq6mxjiLGn58mnvHP4qd7PbBQwESSnvpBqLizWno3+PJaeym27pJBDVZbvNmPAsATua4cuR9ean6xzxk6mmS63PTwGFwso/Mh2nz2fh778giIs56wREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAVYdqNQTPFFwazMB1e9wJ9GhWeoJ2l4O57G1UYuYgWyganITcO/JN/c48lpwklGqrmH4lTlPDSUeT9GR/YPAY6qV7phmZEGnJwc55Nr/VGU6cdFN9tW5MPmDPBYNDQPDYd43QW3C3BVvszj7qSTvGDMxws9t/aF+B4EKf4/ikVVh1Q+F1/D4mn2mkOBs4cNyvxUJ/NUnpkYvhtSl+nlCOUrO/e+ZWXZq3/asXQzH/tPVvbR7ORVbCHNAkA+TkHtNPC/MdCqv7LcPkdiJnEbu7Z3oc+3hBc2wF+eu5TvabatrA6GnOZ5u0uG5t+vP7lmxbSqO5bRq0aWDTraPbv8F1bXQrNsB/jzV3YNOXwRSO9pzGlx5nKLlVLhlC6eVsEftO3ngxvFx8h6myuKngaxjY2izWgNaOgFh8AslMx/AYztOb0yXnv6GdERWH0QREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAXki+hXpEBXm0uwFy6WiIaTcuiOjSfqnh/GvBaVBs/HSt7yulsXC3cRuvcH6RHA8t3VSHa/aUw/IwnxkXc76IO4DqRr0Ch2HYXPVOc5vsjV8rz4RzuT7Rt/mrHjKqjwJ9deZ83ip0Y4jgw9Pin+1Pw3tutF6mzjO0r3t7qMCGEaBjeI5XG/yCw4Ls5UVNi1vdx/1jhYn7I/et7DDSNlfDSRmuqmMMhLiGRizmAgX0cfEN1xpvC5LNu61k+eQ6NOV8BbkaAN7bWuHdTf00UaeEqVL399Sl4VcaqYyTlfZbcr6K3dHxyLPwLA4qVmWMXJ9t59px69F1lpYVXsniZNGbteLjmOYPUG49y3VG1sj6enGEYpQ02sEREJhERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAVBtFc1U2e4+UI8hfwn0srFxCnY2imjiADO4kDLcjG6x63336rlbYbMGY9/BbvQLPYdBIBu14OG7r7lzdnIazu5IZRkgyuY8y2AYCCCWnjvvy8lXHsyPBw9OphcVUjKDanmpLbNvP1z7rJ6Ec7IG/7QnP8AuHfGSH9y6/avSxCSGQWErg4Ptxa22Uny1H+i1/5apKAPZQMD5DpJUP1v9kaXGnCw0vqufhmCVWIS967NlcfHPJut9QfO6DcF66h/yutLJc9X5dPkRnWToLC01xS5aLfXpcyZdlwd+BnNu71+XyysvbpmzfFTNaeG0LIImQxizWCw5niSepJJPmtxefUlxzcu89uhTdOnGD2SQREUC0IiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIDXq6lsbHyPNmsaXOPRouVWM89VikjmsIZC3UgnwMHAut7TrA/HcFY+M0nfQSwg2L2uaDyJGh9bKBbC4u2B0lDUMLHl2lxfxEBtjbgbAg7tVrw+UJTiryXsu883G9urCnN2g735vZN7I8YHQ0gMwpWfh1RA1rnGTwR3cT+LbuJFr9eBUh2L2lfU5o5mhsjdW5QQCL2IsToRce7yXG2Qw7+S2TVFW5ofMGBkTdXAMLt5GmubyFt62dh4HyzyVhblj1y8nOdvy8wBfXqs2Im3VsncohUcKtKnDJv6ody2b3v4v0J8iIonshERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAUX2mxAQyRiGISVTwWxnKC5rTv19emhv1lC5jaYCpMpGro8rTysfEPeMvoVx32Ka8ZSjwxdrvXu5rnsnte+xCZsMjiD6rEZTM9pbnij8WQvvlz5ToNDvs3RWBRvYY2OjtkLQWZRYZSLiw5WUB7O4wf5SzjOC9rXA65vC+46k3+KnGC0hhgiiJuWMa0nqAL/FWypxh2V/sz4KlCCvBWTV3u733e9zfREVZuCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiL4UCIT2bx2dX/8xb0Z/mpuolsIyzq//mnj0a1S1Tq/WyqgrU0giIoFoREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREBy8Kha3v8jQ28r3OygC5s3U23nquoiKU/qIU/pQREUSYREQBERAEREAREQBERAEREAREQH//Z"
                    class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                  <form name="myform" method="POST" action="/login1"  >  
                  @csrf 
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                      <p class="lead fw-normal mb-0 me-3">Login in H&D HOISPITAL</p>
                     
                    
                    </div>
          
                    <div class="divider d-flex align-items-center my-4">
                      <p class="text-center fw-bold mx-3 mb-0"></p>
                    </div>
          
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="text" name="id"  class="form-control form-control-lg"
                        placeholder="Enter your ID" required />
                      <label class="form-label" for="form3Example3">ID </label>
                    </div>
          
                    <!-- Password input -->
                    <div class="form-outline mb-3">
                      <input type="password" name ="password"  class="form-control form-control-lg"
                        placeholder="Enter password" required />
                      <label class="form-label" for="form3Example4">Password</label>
                    </div>
          
                    <div class="d-flex justify-content-between align-items-center">
                      <!-- Checkbox -->
                      <div class="form-check mb-0">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                        <label class="form-check-label" for="form2Example3">
                          Remember me
                        </label>
                      </div>
                      <a href="#!" class="text-body">Forgot password?</a>
                    </div>
          
                    <div class="text-center text-lg-start mt-4 pt-2">
                    <input type="submit" value="Login"/>
                      <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                          class="Registration.html">Register</a></p>
                    </div>
          
                  </form>
                       </div>
              </div>
            </div>
            <div>
           
              <!-- Copyright -->
              <div class="text-white mb-3 mb-md-0">
                Copyright © 2020. All rights reserved.
              </div>
              <!-- Copyright -->
          
              <!-- Right -->
              <div>
                <a href="#!" class="text-white me-4">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#!" class="text-white me-4">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#!" class="text-white me-4">
                  <i class="fab fa-google"></i>
                </a>
                <a href="#!" class="text-white">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
              <!-- Right -->
            </div>
          </section>
          <section id="footer">
  <img src="images/wave2.png" class="footer-img">
  <div class="container">
    <div class="row">
      <div class="col-md-4 footer-box">
        <img src="images/06bc8952bef585843cc8c03d367ebd57.jpg" style="width: 120px; margin-bottom:20px;">
        <p> So visit us and don't compromize on your health <br>
        or make an appointment in best of the time through our online appointment section</p>
      </div>
      <div class="col-md-4 footer-box" style="margin-top: 40px;">
        <p><b>Contact US</b></p>
        <P><i class="fa fa-map-marker"></i> Comsats University Islamabad</P>
        <P><i class="fa fa-map-marker" ></i>+92-4567897655443</P>
        <P><i class="fa fa-map-marker"></i>daud.pvt , hanzla_on_insta</P>

      </div>
      <div class="col-md-4 footer-box" style="margin-top: 40px;">
        <p><b>Make An Appointment</b></p>
        <input type="email" class="form-control" placeholder="Your Email">
        <button type="button" class="btn btn-primary"> Appointment</button>
        

      </div>
    </div>
  </div>

</section>

          <script>  
            function validateform(){  
            var name=document.myform.email.value;  
            var password=document.myform.password.value;  
              
            if (name==null || name==""){  
              alert("Name can't be blank");  
              return false;  
            }else if(password.length<4){  
              alert("Password must be at least 6 characters long.");  
              return false;  
              }  
            }  
            </script> 
    

    </body>