<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Nikko Landing Page</title>
    <link rel="stylesheet" href="css/main.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      
  </head>

<body>

<header>
  <div class="flex md:py-[25px] py-[15px] pb-[12px] px-[23px] md:px-[40px] items-center w-full">
    <div class="lg:w-[155px]">
      <a class="hidden md:block" href="./index.php"><img src="./img/logo.svg"/></a>
      <button class="mobile-menu-btn md:hidden">
        <svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 1H22M0 9.18519H22M0 18H22" stroke="black" stroke-width="1.5"/>
        </svg>
      </button>
    </div>
    <div class="hidden lg:block">
      <h2 class="text-[#003F6C] font-semibold text-4xl leading-[54px] pl-[15px]">Dashboard</h2>
    </div>
    <div class="grow items-center flex justify-end lg:justify-center">
      <form class="hidden lg:flex max-w-[430px] grow rounded-[10px] bg-[#00000008] px-[15px] py-[19px] text-base placeholder:text-[#818B95] items-center justify-between">
        <input class="bg-transparent outline-none w-[calc(100%-23px)] pr-2" placeholder="Search"/>
        <button><img src="./img/icon-search.svg"/></button>
      </form>
      <button class="block lg:hidden mr-[22px]"><img src="./img/icon-search.svg"/></button>
    </div>
    <div class="flex items-center justify-center">
      <a href="./settings.php" class="mr-[22px] lg:mr-[37px] w-[37px] h-[37px] bg-[#F0F6F9] hover:bg-[#408FEF]/20 rounded-[10px] flex items-center justify-center"><img src="./img/icon-settings.svg"/></a>
      <button class="flex text-sm text-[#3E3E3E] items-center relative thumbnail-btn">
        <div class="thumbnail-btn-inner border-[3px] border-transparent lg:mr-[17px] bg-[#B8C9D4] rounded-full w-[53px] text-white text-sm font-bold h-[53px] flex items-center justify-center">NK</div>
        <span class="hidden lg:inline">Username</span>
        <img class="hidden lg:inline ml-[15px]" src="./img/icon-arrow-down.svg"/>

        <div class="thumbnail-menu min-w-[280px] lg:min-w-[483px] absolute bg-[#F0F6F9] p-[12px] pb-[25px] rounded-[20px] button-shadow top-[70px] right-0 z-10 hidden">
          <div class="rounded-[15px] py-[16px] px-[19px] bg-white">
            <a href="" class="text-[#3E3E3E] font-semibold text-[16px] leading-[24px] mb-[30px] block">
              <div class="flex items-center w-max">
              <img src="./img/thumbnail-icon.svg" class="w-[53px] h-[53px] mr-[23px]"/>
              Username 1
              </div>
            </a>
            <a href="" class="text-[#3E3E3E] font-semibold text-[16px] leading-[24px] mb-[29px] block">
              <div class="flex items-center w-max">
              <img src="./img/thumbnail-icon.svg" class="w-[30px] h-[30px] ml-[11.5px] mr-[34.5px]"/>
              Username 2
              </div>
            </a>
            <a href="" class="text-[#3E3E3E] font-semibold text-[16px] leading-[24px] block">
              <div class="flex items-center w-max">
              <img src="./img/thumbnail-icon.svg" class="w-[30px] h-[30px] ml-[11.5px] mr-[34.5px]"/>
              Username 3
              </div>
            </a>
          </div>

            <a href="" class="text-[#3E3E3E] font-semibold text-[14px] leading-[21px] mt-[22.5px] block">
              <div class="flex items-center w-max">
              <svg class="w-[30px] h-[30px] ml-[20px] mr-[46.5px]" width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.3937 16.3031C16.1924 16.1017 16.0917 15.855 16.0917 15.563C16.0917 15.271 16.1924 15.0243 16.3937 14.8229L18.6896 12.5271H9.26458C8.98264 12.5271 8.74097 12.4264 8.53958 12.225C8.33819 12.0236 8.2375 11.7819 8.2375 11.5C8.2375 11.1979 8.33819 10.9512 8.53958 10.7599C8.74097 10.5686 8.98264 10.4729 9.26458 10.4729H18.6292L16.3031 8.14685C16.1219 7.9656 16.0313 7.734 16.0313 7.45206C16.0313 7.17011 16.1319 6.91838 16.3333 6.69685C16.5347 6.49546 16.7814 6.39477 17.0734 6.39477C17.3655 6.39477 17.6122 6.49546 17.8135 6.69685L21.9219 10.8052C22.0226 10.926 22.0981 11.0469 22.1484 11.1677C22.1988 11.2885 22.224 11.4094 22.224 11.5302C22.224 11.6712 22.1988 11.797 22.1484 11.9078C22.0981 12.0186 22.0226 12.1344 21.9219 12.2552L17.8438 16.3333C17.6625 16.5146 17.4309 16.6052 17.149 16.6052C16.867 16.6052 16.6153 16.5045 16.3937 16.3031ZM2.4375 22.5562C1.87361 22.5562 1.38524 22.3498 0.972395 21.937C0.559548 21.5241 0.353125 21.0458 0.353125 20.5021V2.49789C0.353125 1.934 0.559548 1.45067 0.972395 1.04789C1.38524 0.645114 1.87361 0.443726 2.4375 0.443726H10.2312C10.5333 0.443726 10.78 0.54442 10.9714 0.745809C11.1627 0.947198 11.2583 1.18886 11.2583 1.47081C11.2583 1.77289 11.1627 2.01959 10.9714 2.21091C10.78 2.40223 10.5333 2.49789 10.2312 2.49789H2.4375V20.5021H10.2312C10.5333 20.5021 10.78 20.6028 10.9714 20.8041C11.1627 21.0055 11.2583 21.2472 11.2583 21.5291C11.2583 21.8312 11.1627 22.0779 10.9714 22.2692C10.78 22.4606 10.5333 22.5562 10.2312 22.5562H2.4375Z" fill="#A9AFB5"/>
              </svg>

              Sign out
              </div>
            </a>

        </div>

      </button>
    </div>
  </div>
  <div class="md:hidden">
    <h2 class="text-[#003F6C] font-semibold text-[24px] leading-[36px] pl-[23px] pb-[11px]">Dashboard</h2>
  </div>
</header>

<div class="mobile-menu fixed top-0 bottom-0 left-0 right-0 w-full bg-black/20 hidden z-40">
<div class="h-full w-[203px] bg-white overflow-y-scroll scrollbar-hide">
  <div class="relative pt-[50px] pr-[12.5px] min-h-screen">
    <button class="mobile-menu-close absolute top-[26px] right-[21px]">
      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M2 2L8 8M8 8L14 14M8 8L14 2M8 8L2 14" stroke="#222222" stroke-width="2" stroke-linecap="square"/>
      </svg>
    </button>

    <a class="active-mobile-link-top bg-[#EBF4F8] block" href="./index.php">
      <div class="bg-white pl-[18px] pb-[35px]">
        <img class="inline" src="./img/logo.svg"/>
      </div>
    </a>

          <div class="">
          <a href="./index.php" class="aside-list-item text-sm font-semibold bg-[#EBF4F8] block">
                <div class="py-[18px] pl-[18px] bg-white w-full items-center flex">
                <span class="icon-list-item dashboard-list-item w-[37px] h-[37px] rounded-[10px] mr-[8px] flex items-center justify-center"></span>
                Dashboard
                </div>
            </a>
            <button class="aside-list-item list-item-dropdown text-sm font-semibold bg-[#EBF4F8] block w-full">
                <div class="button-hover">
                <div class="py-[18px] pl-[18px] bg-white w-full items-center flex top-aside-dropdown">
                    <span class="icon-list-item sales-list-item w-[37px] h-[37px] rounded-[10px] mr-[8px] flex items-center justify-center"></span>
                    Sales
                </div>
                <div class="list-item-dropdown-main hidden">
                    <a class="text-[#003F6C] font-semibold text-xs leading-[18px] p-[10px] rounded-[10px] block text-left my-[8px]" href="./sales_customers.php">Customers</a>
                    <a class="text-[#003F6C] font-semibold text-xs leading-[18px] p-[10px] rounded-[10px] block text-left my-[8px]" href="./sales_products.php">Product & Services</a>
                    <a class="active text-[#003F6C] font-semibold text-xs leading-[18px] p-[10px] rounded-[10px] block text-left my-[8px]" href="./sales_quatations.php">Quotations</a>
                    <a class="text-[#003F6C] font-semibold text-xs leading-[18px] p-[10px] rounded-[10px] block text-left my-[8px]" href="./sales_invoices.php">Invoices</a>
                    <a class="text-[#003F6C] font-semibold text-xs leading-[18px] p-[10px] rounded-[10px] block text-left my-[8px]" href="./sales_recurring.php">Recurring invoice</a>
                </div>
                </div>
            </button>

            <button class="aside-list-item list-item-dropdown text-sm font-semibold bg-[#EBF4F8] block w-full">
                <div class="button-hover">
                <div class="py-[18px] pl-[18px] bg-white w-full items-center flex top-aside-dropdown">
                    <span class="icon-list-item purchases-list-item w-[37px] h-[37px] rounded-[10px] mr-[8px] flex items-center justify-center"></span>
                    Purchases
                </div>
                <div class="list-item-dropdown-main hidden">
                    <a class="active text-[#003F6C] font-semibold text-xs leading-[18px] p-[10px] rounded-[10px] block text-left my-[8px]" href="./purchases.php">Vendors</a>
                    <a class="text-[#003F6C] font-semibold text-xs leading-[18px] p-[10px] rounded-[10px] block text-left my-[8px]" href="./purchases_expense.php">Expense</a>
                    <a class="text-[#003F6C] font-semibold text-xs leading-[18px] p-[10px] rounded-[10px] block text-left my-[8px]" href="./purchases_products.php">Products & Services</a>
                </div>
            </button>

            <button class="aside-list-item list-item-dropdown text-sm font-semibold bg-[#EBF4F8] block w-full">
                <div class="button-hover">
                <div class="py-[18px] pl-[18px] bg-white w-full items-center flex top-aside-dropdown">
                    <span class="icon-list-item payroll-list-item w-[37px] h-[37px] rounded-[10px] mr-[8px] flex items-center justify-center"></span>
                    Payroll
                </div>
                <div class="list-item-dropdown-main hidden">
                    <a class="active text-[#003F6C] font-semibold text-xs leading-[18px] p-[10px] rounded-[10px] block text-left my-[8px]" href="./payroll.php">Getting Started</a>
                    <a class="text-[#003F6C] font-semibold text-xs leading-[18px] p-[10px] rounded-[10px] block text-left my-[8px]" href="./payroll_recipients.php">External Payment Recipients</a>
                    <a class="text-[#003F6C] font-semibold text-xs leading-[18px] p-[10px] rounded-[10px] block text-left my-[8px]" href="./payroll_brackets.php">Tax Brackets</a>
                    <a class="text-[#003F6C] font-semibold text-xs leading-[18px] p-[10px] rounded-[10px] block text-left my-[8px]" href="./payroll_employees.php">Employees</a>
                    <a class="text-[#003F6C] font-semibold text-xs leading-[18px] p-[10px] rounded-[10px] block text-left my-[8px]" href="./payroll_run.php">Run Payroll</a>
                </div>
            </button>

            <button class="aside-list-item list-item-dropdown text-sm font-semibold bg-[#EBF4F8] block w-full">
                <div class="button-hover">
                <div class="py-[18px] pl-[18px] bg-white w-full items-center flex top-aside-dropdown">
                <span class="icon-list-item reports-list-item w-[37px] h-[37px] rounded-[10px] mr-[8px] flex items-center justify-center"></span>
                    Reports
                </div>
                <div class="list-item-dropdown-main hidden">
                    <a class="active text-[#003F6C] font-semibold text-xs leading-[18px] p-[10px] rounded-[10px] block text-left my-[8px]" href="">Transaction</a>
                    <a class="text-[#003F6C] font-semibold text-xs leading-[18px] p-[10px] rounded-[10px] block text-left my-[8px]" href="">Income summary</a>
                    <a class="text-[#003F6C] font-semibold text-xs leading-[18px] p-[10px] rounded-[10px] block text-left my-[8px]" href="./reports-expense.php">Expense summary</a>
                    <a class="text-[#003F6C] font-semibold text-xs leading-[18px] p-[10px] rounded-[10px] block text-left my-[8px]" href="">Income vs expense</a>
                    <a class="text-[#003F6C] font-semibold text-xs leading-[18px] p-[10px] rounded-[10px] block text-left my-[8px]" href="./reports-products.php">Product stock</a>
                    <a class="text-[#003F6C] font-semibold text-xs leading-[18px] p-[10px] rounded-[10px] block text-left my-[8px]" href="./reports-profit.php">Profit & loss</a>
                    <a class="text-[#003F6C] font-semibold text-xs leading-[18px] p-[10px] rounded-[10px] block text-left my-[8px]" href="">Sales tax report</a>
                    <a class="text-[#003F6C] font-semibold text-xs leading-[18px] p-[10px] rounded-[10px] block text-left my-[8px]" href="">Income by customer</a>
                    <a class="text-[#003F6C] font-semibold text-xs leading-[18px] p-[10px] rounded-[10px] block text-left my-[8px]" href="">Purchases by vendor</a>
                    <a class="text-[#003F6C] font-semibold text-xs leading-[18px] p-[10px] rounded-[10px] block text-left my-[8px]" href="">General reports</a>
                </div>
            </button>

            <a href="./upgrade.php" class="aside-list-item text-sm font-semibold items-center flex py-[18px] pl-[18px]">
                <span class="icon-list-item upgrade-list-item w-[37px] h-[37px] rounded-[10px] mr-[8px] flex items-center justify-center"></span>
                Upgrade
            </a>
        </div>

  </div>
</div>
</div>