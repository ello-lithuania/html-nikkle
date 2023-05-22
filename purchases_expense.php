<?php include('./header.php'); ?>

<div class="flex md:pb-[84px]">
    <?php include('./sidebar.php'); ?>
    <div class="bg-[#EBF4F8] py-[16px] pb-[48px] px-[9px] lg:p-[27px] lg:rounded-[40px] w-full lg:mr-[40px]">

        <div class="bg-gradient-white2 p-[19px] py-[32px] md:p-[35px] rounded-[20px]">
            <div class="flex flex-wrap md:no-wrap justify-between items-center mb-[23px] w-full md:w-auto">
                <h2 class="mb-[28px] md:mb-0 text-[20px] leading-[24px] text-[#003F6C] font-semibold">Expenses</h2>
                        <div class="flex flex-wrap md:flex-nowrap w-full md:w-auto">
                            <a href="" class="mb-[20px] md:mb-0 justify-center md:justify-start w-full md:w-auto whitespace-nowrap md:mr-[18px] border border-[#003F6C]/25 montserrat flex items-center py-[16px] px-[14px] rounded-[10px]  hover:bg-[#408FEF1A] text-[#003F6C] font-semibold text-[14px] leading-[17px]">
                                <span class="mr-[12px] category-icon"></span>
                                Add New Category
                            </a>  
                            <a href="./expenses_new.php" class="w-full md:w-auto justify-center md:justify-start whitespace-nowrap montserrat flex items-center py-[16px] px-[14px] rounded-[10px] bg-[#408FEF1A]  hover:bg-[#408FEF]/20 text-[#0D7AFF] font-semibold text-[14px] leading-[17px]">
                                <span class="mr-[12px] plus-icon"></span>
                                Add New Expenses
                            </a>  
                        </div>      
            </div>

            <div class="grid grid-cols-7 gap-[15px] items-center py-[14px] px-[17px] hidden md:grid bg-silver-light rounded-[10px]">
                <div class="col-span-1">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline mr-[26px]">#</p>
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">Name</p>
                </div>
                <div class="col-span-1">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">amount</p>
                </div>
                <div class="col-span-1">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">Client</p>
                </div>
                <div class="col-span-1">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">Category</p>
                </div>
                <div class="col-span-1">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">Notes</p>
                </div>
                <div class="col-span-1">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">file</p>
                </div>
                <div class="col-span-1 text-center">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">Actions</p> 
                </div>
            </div>

            <div class="grid grid-cols-10 md:grid-cols-7 gap-[15px] items-center py-[20px] md:py-[17px] md:px-[17px]">
                <div class="col-span-3 md:col-span-1">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mr-[26px] hidden md:inline">1</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] inline">21 Feb 2023</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0 md:hidden mt-[15px]">N$4282.30</p>
                </div>
                <div class="col-span-0 md:col-span-1 hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">N$4282.30</p>
                </div>
                <div class="col-span-3 md:col-span-1">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0 font-semibold">Abhinav Test</p>
                    <p class="text-[#3E3E3E] montsserrat text-[14px] leading-[21px] px-[13px] py-[5px] bg-[#DCDBFA80]/50 rounded-[20px] mt-[10px] inline-flex md:hidden items-center justify-center">Purchase</p>
                </div>
                <div class="col-span-0 md:col-span-1 hidden md:block">
                    <p class="text-[#3E3E3E] montsserrat text-[14px] leading-[21px] px-[13px] py-[5px] bg-[#DCDBFA80]/50 rounded-[20px] inline-flex items-center justify-center">Purchase</p>
                </div>
                <div class="col-span-3 md:col-span-1 text-center md:text-left">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">345676</p>
                </div>
                <div class="col-span-0 md:col-span-1 hidden md:block">
                    <a href="" class="text-[#0D7AFF] text-[14px] leading-[21px]">expense_1285.pdf</a>
                </div>
                <div class="col-span-1 md:col-span-1 relative text-center flex justify-end md:items-center md:justify-center">
                            <button class="action-btn w-[40px] h-[40px] flex items-center justify-center rounded-[10px] hover:bg-[#408FEF]/10">
                                <span class="dots-icon-vertical !hidden md:!block"></span>
                                <span class="dots-icon md:!hidden"></span>
                            </button>
                                <div class="action-btn-controls hidden absolute p-[15px] bg-white rounded-[10px] right-0 top-[3rem] button-shadow z-10">
                                   <div class="flex">
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] inline-flex items-center justify-center">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.93333 20C1.4 20 0.944445 19.8133 0.566667 19.4399C0.188889 19.0664 0 18.6161 0 18.089V14.0033H1.5V18.089C1.5 18.1988 1.54444 18.2976 1.63333 18.3855C1.72222 18.4734 1.82222 18.5173 1.93333 18.5173H18.0667C18.1778 18.5173 18.2778 18.4734 18.3667 18.3855C18.4556 18.2976 18.5 18.1988 18.5 18.089V14.0033H20V18.089C20 18.6161 19.8111 19.0664 19.4333 19.4399C19.0556 19.8133 18.6 20 18.0667 20H1.93333ZM10 15.0577L4.46667 9.58814L5.56667 8.53377L9.23333 12.1582V0H10.7667V12.1582L14.4333 8.53377L15.5333 9.58814L10 15.0577Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.2662 4.74903L12.251 1.7338L13.6844 0.300336C13.8949 0.100112 14.1573 0 14.4716 0C14.7858 0 15.0507 0.100112 15.2662 0.300336L16.6997 1.7338C16.8999 1.95953 17 2.22952 17 2.54376C17 2.85804 16.8999 3.1153 16.6997 3.31556L15.2662 4.74903ZM0 17V13.9848L10.3156 3.66918L13.3308 6.68436L3.01518 17H0Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.94925 20C2.47867 20 2.07256 19.8314 1.73092 19.4942C1.38929 19.1569 1.21848 18.7561 1.21848 18.2915V2.17539H0.680762C0.487501 2.17539 0.325731 2.11057 0.195451 1.98092C0.0651502 1.85128 0 1.69031 0 1.49803C0 1.30572 0.0651502 1.14654 0.195451 1.02049C0.325731 0.894457 0.487501 0.83144 0.680762 0.83144H5.1323C5.1323 0.589977 5.21668 0.391038 5.38544 0.234622C5.55418 0.0782073 5.75826 0 5.99768 0H12.0023C12.2417 0 12.4458 0.0794906 12.6146 0.238472C12.7833 0.397454 12.8677 0.59511 12.8677 0.83144H17.3192C17.5125 0.83144 17.6743 0.896263 17.8045 1.02591C17.9348 1.15553 18 1.3165 18 1.50881C18 1.70111 17.9348 1.86028 17.8045 1.98631C17.6743 2.11236 17.5125 2.17539 17.3192 2.17539H16.7815V18.2915C16.7815 18.7561 16.6107 19.1569 16.2691 19.4942C15.9274 19.8314 15.5213 20 15.0507 20H2.94925ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H15.0507C15.1507 18.656 15.2373 18.6219 15.3104 18.5535C15.3835 18.4852 15.42 18.3979 15.42 18.2915V2.17539H2.57998ZM6.03695 15.4829C6.03695 15.6737 6.10261 15.8334 6.23393 15.962C6.36527 16.0906 6.52835 16.1549 6.72317 16.1549C6.91797 16.1549 7.07922 16.0906 7.20692 15.962C7.3346 15.8334 7.39844 15.6737 7.39844 15.4829V5.31889C7.39844 5.13552 7.33278 4.97769 7.20146 4.84538C7.07012 4.71307 6.90704 4.64691 6.71222 4.64691C6.51742 4.64691 6.35617 4.71307 6.22847 4.84538C6.10079 4.97769 6.03695 5.13552 6.03695 5.31889V15.4829ZM10.6016 15.4829C10.6016 15.6737 10.6672 15.8334 10.7985 15.962C10.9299 16.0906 11.093 16.1549 11.2878 16.1549C11.4826 16.1549 11.6438 16.0906 11.7715 15.962C11.8992 15.8334 11.963 15.6737 11.963 15.4829V5.31889C11.963 5.13552 11.8974 4.97769 11.7661 4.84538C11.6347 4.71307 11.4716 4.64691 11.2768 4.64691C11.082 4.64691 10.9208 4.71307 10.7931 4.84538C10.6654 4.97769 10.6016 5.13552 10.6016 5.31889V15.4829ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H2.57998V2.17539Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                   </div>
                                </div>
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-10 md:grid-cols-7 gap-[15px] items-center py-[20px] md:py-[17px] md:px-[17px]">
                <div class="col-span-3 md:col-span-1">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mr-[26px] hidden md:inline">1</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] inline">21 Feb 2023</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0 md:hidden mt-[15px]">N$4282.30</p>
                </div>
                <div class="col-span-0 md:col-span-1 hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">N$4282.30</p>
                </div>
                <div class="col-span-3 md:col-span-1">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0 font-semibold">Abhinav Test</p>
                    <p class="text-[#3E3E3E] montsserrat text-[14px] leading-[21px] px-[13px] py-[5px] bg-[#DCDBFA80]/50 rounded-[20px] mt-[10px] inline-flex md:hidden items-center justify-center">Purchase</p>
                </div>
                <div class="col-span-0 md:col-span-1 hidden md:block">
                    <p class="text-[#3E3E3E] montsserrat text-[14px] leading-[21px] px-[13px] py-[5px] bg-[#DCDBFA80]/50 rounded-[20px] inline-flex items-center justify-center">Purchase</p>
                </div>
                <div class="col-span-3 md:col-span-1 text-center md:text-left">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">345676</p>
                </div>
                <div class="col-span-0 md:col-span-1 hidden md:block">
                    <a href="" class="text-[#0D7AFF] text-[14px] leading-[21px]">expense_1285.pdf</a>
                </div>
                <div class="col-span-1 md:col-span-1 relative text-center flex justify-end md:items-center md:justify-center">
                            <button class="action-btn w-[40px] h-[40px] flex items-center justify-center rounded-[10px] hover:bg-[#408FEF]/10">
                                <span class="dots-icon-vertical !hidden md:!block"></span>
                                <span class="dots-icon md:!hidden"></span>
                            </button>
                                <div class="action-btn-controls hidden absolute p-[15px] bg-white rounded-[10px] right-0 top-[3rem] button-shadow z-10">
                                   <div class="flex">
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] inline-flex items-center justify-center">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.93333 20C1.4 20 0.944445 19.8133 0.566667 19.4399C0.188889 19.0664 0 18.6161 0 18.089V14.0033H1.5V18.089C1.5 18.1988 1.54444 18.2976 1.63333 18.3855C1.72222 18.4734 1.82222 18.5173 1.93333 18.5173H18.0667C18.1778 18.5173 18.2778 18.4734 18.3667 18.3855C18.4556 18.2976 18.5 18.1988 18.5 18.089V14.0033H20V18.089C20 18.6161 19.8111 19.0664 19.4333 19.4399C19.0556 19.8133 18.6 20 18.0667 20H1.93333ZM10 15.0577L4.46667 9.58814L5.56667 8.53377L9.23333 12.1582V0H10.7667V12.1582L14.4333 8.53377L15.5333 9.58814L10 15.0577Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.2662 4.74903L12.251 1.7338L13.6844 0.300336C13.8949 0.100112 14.1573 0 14.4716 0C14.7858 0 15.0507 0.100112 15.2662 0.300336L16.6997 1.7338C16.8999 1.95953 17 2.22952 17 2.54376C17 2.85804 16.8999 3.1153 16.6997 3.31556L15.2662 4.74903ZM0 17V13.9848L10.3156 3.66918L13.3308 6.68436L3.01518 17H0Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.94925 20C2.47867 20 2.07256 19.8314 1.73092 19.4942C1.38929 19.1569 1.21848 18.7561 1.21848 18.2915V2.17539H0.680762C0.487501 2.17539 0.325731 2.11057 0.195451 1.98092C0.0651502 1.85128 0 1.69031 0 1.49803C0 1.30572 0.0651502 1.14654 0.195451 1.02049C0.325731 0.894457 0.487501 0.83144 0.680762 0.83144H5.1323C5.1323 0.589977 5.21668 0.391038 5.38544 0.234622C5.55418 0.0782073 5.75826 0 5.99768 0H12.0023C12.2417 0 12.4458 0.0794906 12.6146 0.238472C12.7833 0.397454 12.8677 0.59511 12.8677 0.83144H17.3192C17.5125 0.83144 17.6743 0.896263 17.8045 1.02591C17.9348 1.15553 18 1.3165 18 1.50881C18 1.70111 17.9348 1.86028 17.8045 1.98631C17.6743 2.11236 17.5125 2.17539 17.3192 2.17539H16.7815V18.2915C16.7815 18.7561 16.6107 19.1569 16.2691 19.4942C15.9274 19.8314 15.5213 20 15.0507 20H2.94925ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H15.0507C15.1507 18.656 15.2373 18.6219 15.3104 18.5535C15.3835 18.4852 15.42 18.3979 15.42 18.2915V2.17539H2.57998ZM6.03695 15.4829C6.03695 15.6737 6.10261 15.8334 6.23393 15.962C6.36527 16.0906 6.52835 16.1549 6.72317 16.1549C6.91797 16.1549 7.07922 16.0906 7.20692 15.962C7.3346 15.8334 7.39844 15.6737 7.39844 15.4829V5.31889C7.39844 5.13552 7.33278 4.97769 7.20146 4.84538C7.07012 4.71307 6.90704 4.64691 6.71222 4.64691C6.51742 4.64691 6.35617 4.71307 6.22847 4.84538C6.10079 4.97769 6.03695 5.13552 6.03695 5.31889V15.4829ZM10.6016 15.4829C10.6016 15.6737 10.6672 15.8334 10.7985 15.962C10.9299 16.0906 11.093 16.1549 11.2878 16.1549C11.4826 16.1549 11.6438 16.0906 11.7715 15.962C11.8992 15.8334 11.963 15.6737 11.963 15.4829V5.31889C11.963 5.13552 11.8974 4.97769 11.7661 4.84538C11.6347 4.71307 11.4716 4.64691 11.2768 4.64691C11.082 4.64691 10.9208 4.71307 10.7931 4.84538C10.6654 4.97769 10.6016 5.13552 10.6016 5.31889V15.4829ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H2.57998V2.17539Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                   </div>
                                </div>
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-10 md:grid-cols-7 gap-[15px] items-center py-[20px] md:py-[17px] md:px-[17px]">
                <div class="col-span-3 md:col-span-1">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mr-[26px] hidden md:inline">1</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] inline">21 Feb 2023</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0 md:hidden mt-[15px]">N$4282.30</p>
                </div>
                <div class="col-span-0 md:col-span-1 hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">N$4282.30</p>
                </div>
                <div class="col-span-3 md:col-span-1">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0 font-semibold">Abhinav Test</p>
                    <p class="text-[#3E3E3E] montsserrat text-[14px] leading-[21px] px-[13px] py-[5px] bg-[#DCDBFA80]/50 rounded-[20px] mt-[10px] inline-flex md:hidden items-center justify-center">Purchase</p>
                </div>
                <div class="col-span-0 md:col-span-1 hidden md:block">
                    <p class="text-[#3E3E3E] montsserrat text-[14px] leading-[21px] px-[13px] py-[5px] bg-[#DCDBFA80]/50 rounded-[20px] inline-flex items-center justify-center">Purchase</p>
                </div>
                <div class="col-span-3 md:col-span-1 text-center md:text-left">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">345676</p>
                </div>
                <div class="col-span-0 md:col-span-1 hidden md:block">
                    <a href="" class="text-[#0D7AFF] text-[14px] leading-[21px]">expense_1285.pdf</a>
                </div>
                <div class="col-span-1 md:col-span-1 relative text-center flex justify-end md:items-center md:justify-center">
                            <button class="action-btn w-[40px] h-[40px] flex items-center justify-center rounded-[10px] hover:bg-[#408FEF]/10">
                                <span class="dots-icon-vertical !hidden md:!block"></span>
                                <span class="dots-icon md:!hidden"></span>
                            </button>
                                <div class="action-btn-controls hidden absolute p-[15px] bg-white rounded-[10px] right-0 top-[3rem] button-shadow z-10">
                                   <div class="flex">
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] inline-flex items-center justify-center">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.93333 20C1.4 20 0.944445 19.8133 0.566667 19.4399C0.188889 19.0664 0 18.6161 0 18.089V14.0033H1.5V18.089C1.5 18.1988 1.54444 18.2976 1.63333 18.3855C1.72222 18.4734 1.82222 18.5173 1.93333 18.5173H18.0667C18.1778 18.5173 18.2778 18.4734 18.3667 18.3855C18.4556 18.2976 18.5 18.1988 18.5 18.089V14.0033H20V18.089C20 18.6161 19.8111 19.0664 19.4333 19.4399C19.0556 19.8133 18.6 20 18.0667 20H1.93333ZM10 15.0577L4.46667 9.58814L5.56667 8.53377L9.23333 12.1582V0H10.7667V12.1582L14.4333 8.53377L15.5333 9.58814L10 15.0577Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.2662 4.74903L12.251 1.7338L13.6844 0.300336C13.8949 0.100112 14.1573 0 14.4716 0C14.7858 0 15.0507 0.100112 15.2662 0.300336L16.6997 1.7338C16.8999 1.95953 17 2.22952 17 2.54376C17 2.85804 16.8999 3.1153 16.6997 3.31556L15.2662 4.74903ZM0 17V13.9848L10.3156 3.66918L13.3308 6.68436L3.01518 17H0Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.94925 20C2.47867 20 2.07256 19.8314 1.73092 19.4942C1.38929 19.1569 1.21848 18.7561 1.21848 18.2915V2.17539H0.680762C0.487501 2.17539 0.325731 2.11057 0.195451 1.98092C0.0651502 1.85128 0 1.69031 0 1.49803C0 1.30572 0.0651502 1.14654 0.195451 1.02049C0.325731 0.894457 0.487501 0.83144 0.680762 0.83144H5.1323C5.1323 0.589977 5.21668 0.391038 5.38544 0.234622C5.55418 0.0782073 5.75826 0 5.99768 0H12.0023C12.2417 0 12.4458 0.0794906 12.6146 0.238472C12.7833 0.397454 12.8677 0.59511 12.8677 0.83144H17.3192C17.5125 0.83144 17.6743 0.896263 17.8045 1.02591C17.9348 1.15553 18 1.3165 18 1.50881C18 1.70111 17.9348 1.86028 17.8045 1.98631C17.6743 2.11236 17.5125 2.17539 17.3192 2.17539H16.7815V18.2915C16.7815 18.7561 16.6107 19.1569 16.2691 19.4942C15.9274 19.8314 15.5213 20 15.0507 20H2.94925ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H15.0507C15.1507 18.656 15.2373 18.6219 15.3104 18.5535C15.3835 18.4852 15.42 18.3979 15.42 18.2915V2.17539H2.57998ZM6.03695 15.4829C6.03695 15.6737 6.10261 15.8334 6.23393 15.962C6.36527 16.0906 6.52835 16.1549 6.72317 16.1549C6.91797 16.1549 7.07922 16.0906 7.20692 15.962C7.3346 15.8334 7.39844 15.6737 7.39844 15.4829V5.31889C7.39844 5.13552 7.33278 4.97769 7.20146 4.84538C7.07012 4.71307 6.90704 4.64691 6.71222 4.64691C6.51742 4.64691 6.35617 4.71307 6.22847 4.84538C6.10079 4.97769 6.03695 5.13552 6.03695 5.31889V15.4829ZM10.6016 15.4829C10.6016 15.6737 10.6672 15.8334 10.7985 15.962C10.9299 16.0906 11.093 16.1549 11.2878 16.1549C11.4826 16.1549 11.6438 16.0906 11.7715 15.962C11.8992 15.8334 11.963 15.6737 11.963 15.4829V5.31889C11.963 5.13552 11.8974 4.97769 11.7661 4.84538C11.6347 4.71307 11.4716 4.64691 11.2768 4.64691C11.082 4.64691 10.9208 4.71307 10.7931 4.84538C10.6654 4.97769 10.6016 5.13552 10.6016 5.31889V15.4829ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H2.57998V2.17539Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                   </div>
                                </div>
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-10 md:grid-cols-7 gap-[15px] items-center py-[20px] md:py-[17px] md:px-[17px]">
                <div class="col-span-3 md:col-span-1">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mr-[26px] hidden md:inline">1</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] inline">21 Feb 2023</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0 md:hidden mt-[15px]">N$4282.30</p>
                </div>
                <div class="col-span-0 md:col-span-1 hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">N$4282.30</p>
                </div>
                <div class="col-span-3 md:col-span-1">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0 font-semibold">Abhinav Test</p>
                    <p class="text-[#3E3E3E] montsserrat text-[14px] leading-[21px] px-[13px] py-[5px] bg-[#DCDBFA80]/50 rounded-[20px] mt-[10px] inline-flex md:hidden items-center justify-center">Purchase</p>
                </div>
                <div class="col-span-0 md:col-span-1 hidden md:block">
                    <p class="text-[#3E3E3E] montsserrat text-[14px] leading-[21px] px-[13px] py-[5px] bg-[#DCDBFA80]/50 rounded-[20px] inline-flex items-center justify-center">Purchase</p>
                </div>
                <div class="col-span-3 md:col-span-1 text-center md:text-left">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">345676</p>
                </div>
                <div class="col-span-0 md:col-span-1 hidden md:block">
                    <a href="" class="text-[#0D7AFF] text-[14px] leading-[21px]">expense_1285.pdf</a>
                </div>
                <div class="col-span-1 md:col-span-1 relative text-center flex justify-end md:items-center md:justify-center">
                            <button class="action-btn w-[40px] h-[40px] flex items-center justify-center rounded-[10px] hover:bg-[#408FEF]/10">
                                <span class="dots-icon-vertical !hidden md:!block"></span>
                                <span class="dots-icon md:!hidden"></span>
                            </button>
                                <div class="action-btn-controls hidden absolute p-[15px] bg-white rounded-[10px] right-0 top-[3rem] button-shadow z-10">
                                   <div class="flex">
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] inline-flex items-center justify-center">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.93333 20C1.4 20 0.944445 19.8133 0.566667 19.4399C0.188889 19.0664 0 18.6161 0 18.089V14.0033H1.5V18.089C1.5 18.1988 1.54444 18.2976 1.63333 18.3855C1.72222 18.4734 1.82222 18.5173 1.93333 18.5173H18.0667C18.1778 18.5173 18.2778 18.4734 18.3667 18.3855C18.4556 18.2976 18.5 18.1988 18.5 18.089V14.0033H20V18.089C20 18.6161 19.8111 19.0664 19.4333 19.4399C19.0556 19.8133 18.6 20 18.0667 20H1.93333ZM10 15.0577L4.46667 9.58814L5.56667 8.53377L9.23333 12.1582V0H10.7667V12.1582L14.4333 8.53377L15.5333 9.58814L10 15.0577Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.2662 4.74903L12.251 1.7338L13.6844 0.300336C13.8949 0.100112 14.1573 0 14.4716 0C14.7858 0 15.0507 0.100112 15.2662 0.300336L16.6997 1.7338C16.8999 1.95953 17 2.22952 17 2.54376C17 2.85804 16.8999 3.1153 16.6997 3.31556L15.2662 4.74903ZM0 17V13.9848L10.3156 3.66918L13.3308 6.68436L3.01518 17H0Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.94925 20C2.47867 20 2.07256 19.8314 1.73092 19.4942C1.38929 19.1569 1.21848 18.7561 1.21848 18.2915V2.17539H0.680762C0.487501 2.17539 0.325731 2.11057 0.195451 1.98092C0.0651502 1.85128 0 1.69031 0 1.49803C0 1.30572 0.0651502 1.14654 0.195451 1.02049C0.325731 0.894457 0.487501 0.83144 0.680762 0.83144H5.1323C5.1323 0.589977 5.21668 0.391038 5.38544 0.234622C5.55418 0.0782073 5.75826 0 5.99768 0H12.0023C12.2417 0 12.4458 0.0794906 12.6146 0.238472C12.7833 0.397454 12.8677 0.59511 12.8677 0.83144H17.3192C17.5125 0.83144 17.6743 0.896263 17.8045 1.02591C17.9348 1.15553 18 1.3165 18 1.50881C18 1.70111 17.9348 1.86028 17.8045 1.98631C17.6743 2.11236 17.5125 2.17539 17.3192 2.17539H16.7815V18.2915C16.7815 18.7561 16.6107 19.1569 16.2691 19.4942C15.9274 19.8314 15.5213 20 15.0507 20H2.94925ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H15.0507C15.1507 18.656 15.2373 18.6219 15.3104 18.5535C15.3835 18.4852 15.42 18.3979 15.42 18.2915V2.17539H2.57998ZM6.03695 15.4829C6.03695 15.6737 6.10261 15.8334 6.23393 15.962C6.36527 16.0906 6.52835 16.1549 6.72317 16.1549C6.91797 16.1549 7.07922 16.0906 7.20692 15.962C7.3346 15.8334 7.39844 15.6737 7.39844 15.4829V5.31889C7.39844 5.13552 7.33278 4.97769 7.20146 4.84538C7.07012 4.71307 6.90704 4.64691 6.71222 4.64691C6.51742 4.64691 6.35617 4.71307 6.22847 4.84538C6.10079 4.97769 6.03695 5.13552 6.03695 5.31889V15.4829ZM10.6016 15.4829C10.6016 15.6737 10.6672 15.8334 10.7985 15.962C10.9299 16.0906 11.093 16.1549 11.2878 16.1549C11.4826 16.1549 11.6438 16.0906 11.7715 15.962C11.8992 15.8334 11.963 15.6737 11.963 15.4829V5.31889C11.963 5.13552 11.8974 4.97769 11.7661 4.84538C11.6347 4.71307 11.4716 4.64691 11.2768 4.64691C11.082 4.64691 10.9208 4.71307 10.7931 4.84538C10.6654 4.97769 10.6016 5.13552 10.6016 5.31889V15.4829ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H2.57998V2.17539Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                   </div>
                                </div>
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-10 md:grid-cols-7 gap-[15px] items-center py-[20px] md:py-[17px] md:px-[17px]">
                <div class="col-span-3 md:col-span-1">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mr-[26px] hidden md:inline">1</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] inline">21 Feb 2023</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0 md:hidden mt-[15px]">N$4282.30</p>
                </div>
                <div class="col-span-0 md:col-span-1 hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">N$4282.30</p>
                </div>
                <div class="col-span-3 md:col-span-1">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0 font-semibold">Abhinav Test</p>
                    <p class="text-[#3E3E3E] montsserrat text-[14px] leading-[21px] px-[13px] py-[5px] bg-[#DCDBFA80]/50 rounded-[20px] mt-[10px] inline-flex md:hidden items-center justify-center">Purchase</p>
                </div>
                <div class="col-span-0 md:col-span-1 hidden md:block">
                    <p class="text-[#3E3E3E] montsserrat text-[14px] leading-[21px] px-[13px] py-[5px] bg-[#DCDBFA80]/50 rounded-[20px] inline-flex items-center justify-center">Purchase</p>
                </div>
                <div class="col-span-3 md:col-span-1 text-center md:text-left">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0">345676</p>
                </div>
                <div class="col-span-0 md:col-span-1 hidden md:block">
                    <a href="" class="text-[#0D7AFF] text-[14px] leading-[21px]">expense_1285.pdf</a>
                </div>
                <div class="col-span-1 md:col-span-1 relative text-center flex justify-end md:items-center md:justify-center">
                            <button class="action-btn w-[40px] h-[40px] flex items-center justify-center rounded-[10px] hover:bg-[#408FEF]/10">
                                <span class="dots-icon-vertical !hidden md:!block"></span>
                                <span class="dots-icon md:!hidden"></span>
                            </button>
                                <div class="action-btn-controls hidden absolute p-[15px] bg-white rounded-[10px] right-0 top-[3rem] button-shadow z-10">
                                   <div class="flex">
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] inline-flex items-center justify-center">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.93333 20C1.4 20 0.944445 19.8133 0.566667 19.4399C0.188889 19.0664 0 18.6161 0 18.089V14.0033H1.5V18.089C1.5 18.1988 1.54444 18.2976 1.63333 18.3855C1.72222 18.4734 1.82222 18.5173 1.93333 18.5173H18.0667C18.1778 18.5173 18.2778 18.4734 18.3667 18.3855C18.4556 18.2976 18.5 18.1988 18.5 18.089V14.0033H20V18.089C20 18.6161 19.8111 19.0664 19.4333 19.4399C19.0556 19.8133 18.6 20 18.0667 20H1.93333ZM10 15.0577L4.46667 9.58814L5.56667 8.53377L9.23333 12.1582V0H10.7667V12.1582L14.4333 8.53377L15.5333 9.58814L10 15.0577Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.2662 4.74903L12.251 1.7338L13.6844 0.300336C13.8949 0.100112 14.1573 0 14.4716 0C14.7858 0 15.0507 0.100112 15.2662 0.300336L16.6997 1.7338C16.8999 1.95953 17 2.22952 17 2.54376C17 2.85804 16.8999 3.1153 16.6997 3.31556L15.2662 4.74903ZM0 17V13.9848L10.3156 3.66918L13.3308 6.68436L3.01518 17H0Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.94925 20C2.47867 20 2.07256 19.8314 1.73092 19.4942C1.38929 19.1569 1.21848 18.7561 1.21848 18.2915V2.17539H0.680762C0.487501 2.17539 0.325731 2.11057 0.195451 1.98092C0.0651502 1.85128 0 1.69031 0 1.49803C0 1.30572 0.0651502 1.14654 0.195451 1.02049C0.325731 0.894457 0.487501 0.83144 0.680762 0.83144H5.1323C5.1323 0.589977 5.21668 0.391038 5.38544 0.234622C5.55418 0.0782073 5.75826 0 5.99768 0H12.0023C12.2417 0 12.4458 0.0794906 12.6146 0.238472C12.7833 0.397454 12.8677 0.59511 12.8677 0.83144H17.3192C17.5125 0.83144 17.6743 0.896263 17.8045 1.02591C17.9348 1.15553 18 1.3165 18 1.50881C18 1.70111 17.9348 1.86028 17.8045 1.98631C17.6743 2.11236 17.5125 2.17539 17.3192 2.17539H16.7815V18.2915C16.7815 18.7561 16.6107 19.1569 16.2691 19.4942C15.9274 19.8314 15.5213 20 15.0507 20H2.94925ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H15.0507C15.1507 18.656 15.2373 18.6219 15.3104 18.5535C15.3835 18.4852 15.42 18.3979 15.42 18.2915V2.17539H2.57998ZM6.03695 15.4829C6.03695 15.6737 6.10261 15.8334 6.23393 15.962C6.36527 16.0906 6.52835 16.1549 6.72317 16.1549C6.91797 16.1549 7.07922 16.0906 7.20692 15.962C7.3346 15.8334 7.39844 15.6737 7.39844 15.4829V5.31889C7.39844 5.13552 7.33278 4.97769 7.20146 4.84538C7.07012 4.71307 6.90704 4.64691 6.71222 4.64691C6.51742 4.64691 6.35617 4.71307 6.22847 4.84538C6.10079 4.97769 6.03695 5.13552 6.03695 5.31889V15.4829ZM10.6016 15.4829C10.6016 15.6737 10.6672 15.8334 10.7985 15.962C10.9299 16.0906 11.093 16.1549 11.2878 16.1549C11.4826 16.1549 11.6438 16.0906 11.7715 15.962C11.8992 15.8334 11.963 15.6737 11.963 15.4829V5.31889C11.963 5.13552 11.8974 4.97769 11.7661 4.84538C11.6347 4.71307 11.4716 4.64691 11.2768 4.64691C11.082 4.64691 10.9208 4.71307 10.7931 4.84538C10.6654 4.97769 10.6016 5.13552 10.6016 5.31889V15.4829ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H2.57998V2.17539Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                                   </div>
                                </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include('./footer.php');?>

<?php include('./footer-bot.php');?>