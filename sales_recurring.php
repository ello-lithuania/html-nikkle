<?php include('./header.php'); ?>

<div class="flex md:pb-[84px]">
    <?php include('./sidebar.php'); ?>
    <div class="bg-[#EBF4F8] py-[16px] pb-[48px] px-[9px] lg:p-[27px] lg:rounded-[40px] w-full lg:mr-[40px]">

        <div class="bg-gradient-white2 p-[35px] rounded-[20px]">
            <div class="flex justify-between items-center mb-[23px]">
                <h2 class="text-[20px] leading-[24px] text-[#003F6C] font-semibold">Create New Invoice</h2>    
            </div>
                <div class="border border-[#D9D9D9] rounded-[10px] px-[36px] py-[30px]">
                    <h3 class="text-[16px] leading-[24px] text-[#003F6C] font-semibold mb-[30px]">Business address and contact details, title, summary, and logo</h3>   
                
                <div class="relative inline-block mb-[33px]">
                    <img src="./img/thumbnail-big.jpg" class="rounded-full"/>
                    <button class="bg-[#408FEF1A]/10 w-[37px] absolute bottom-0 right-0 h-[37px] flex items-center justify-center rounded-full border-[4px] border-white"><img class="w-[14px] h-[14px]" src="./img/icon-edit.svg"/></button>
                </div>

            <div class="grid grid-cols-12 gap-[20px] mb-[20px] items-center">
                <div class="col-span-12 md:col-span-6">
                    <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Business Owner Name</label>
                    <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0 text-[#003F6C]"/>
                </div>
                <div class="col-span-12 md:col-span-6">
                    <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Email</label>
                    <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-[20px] mb-[20px] items-center">
                <div class="col-span-12 md:col-span-6">
                    <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Address</label>
                    <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                </div>
                <div class="col-span-12 md:col-span-6">
                    <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Invoice Title</label>
                    <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                </div>
            </div>
                
            <div class="grid grid-cols-12 gap-[20px] items-center">
                <div class="col-span-12 md:col-span-6">
                    <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Summary (project name, description of invoice)</label>
                    <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                </div>
                <div class="col-span-12 md:col-span-7">
                    
                </div>
            </div>
            
            <div class="grid grid-cols-12 md:grid-cols-10 gap-[20px] items-end">
                <div class="col-span-12 md:col-span-2">
                    <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">P.O./S.O. number</label>
                    <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                </div>
                <div class="col-span-12 md:col-span-2">
                    <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Invoice date</label>
                    <div class="relative max-w-sm">
                    <div class="absolute inset-y-0 right-[18px] flex items-center pl-3 pointer-events-none">
                        <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.34982 12.4575C9.0501 12.4575 8.79866 12.3561 8.59548 12.1533C8.39229 11.9506 8.2907 11.6993 8.2907 11.3996C8.2907 11.0999 8.39207 10.8484 8.59482 10.6453C8.79758 10.4421 9.04883 10.3405 9.34855 10.3405C9.64827 10.3405 9.89971 10.4419 10.1029 10.6446C10.3061 10.8474 10.4077 11.0986 10.4077 11.3983C10.4077 11.6981 10.3063 11.9495 10.1036 12.1527C9.90079 12.3559 9.64954 12.4575 9.34982 12.4575ZM5.2625 12.4575C4.96278 12.4575 4.71134 12.3561 4.50816 12.1533C4.30497 11.9506 4.20338 11.6993 4.20338 11.3996C4.20338 11.0999 4.30475 10.8484 4.5075 10.6453C4.71026 10.4421 4.96151 10.3405 5.26123 10.3405C5.56095 10.3405 5.81239 10.4419 6.01557 10.6446C6.21876 10.8474 6.32035 11.0986 6.32035 11.3983C6.32035 11.6981 6.21898 11.9495 6.01623 12.1527C5.81347 12.3559 5.56222 12.4575 5.2625 12.4575ZM13.4371 12.4575C13.1431 12.4575 12.8931 12.3561 12.6871 12.1533C12.481 11.9506 12.378 11.6993 12.378 11.3996C12.378 11.0999 12.4808 10.8484 12.6864 10.6453C12.892 10.4421 13.1429 10.3405 13.4389 10.3405C13.735 10.3405 13.985 10.4419 14.189 10.6446C14.393 10.8474 14.495 11.0986 14.495 11.3983C14.495 11.6981 14.3936 11.9495 14.1909 12.1527C13.9881 12.3559 13.7369 12.4575 13.4371 12.4575ZM9.34982 16.5448C9.0501 16.5448 8.79866 16.442 8.59548 16.2364C8.39229 16.0308 8.2907 15.7799 8.2907 15.4839C8.2907 15.1878 8.39207 14.9378 8.59482 14.7338C8.79758 14.5298 9.04883 14.4278 9.34855 14.4278C9.64827 14.4278 9.89971 14.5292 10.1029 14.7319C10.3061 14.9347 10.4077 15.1859 10.4077 15.4857C10.4077 15.7797 10.3063 16.0297 10.1036 16.2357C9.90079 16.4418 9.64954 16.5448 9.34982 16.5448ZM5.2625 16.5448C4.96278 16.5448 4.71134 16.442 4.50816 16.2364C4.30497 16.0308 4.20338 15.7799 4.20338 15.4839C4.20338 15.1878 4.30475 14.9378 4.5075 14.7338C4.71026 14.5298 4.96151 14.4278 5.26123 14.4278C5.56095 14.4278 5.81239 14.5292 6.01557 14.7319C6.21876 14.9347 6.32035 15.1859 6.32035 15.4857C6.32035 15.7797 6.21898 16.0297 6.01623 16.2357C5.81347 16.4418 5.56222 16.5448 5.2625 16.5448ZM13.4371 16.5448C13.1431 16.5448 12.8931 16.442 12.6871 16.2364C12.481 16.0308 12.378 15.7799 12.378 15.4839C12.378 15.1878 12.4808 14.9378 12.6864 14.7338C12.892 14.5298 13.1429 14.4278 13.4389 14.4278C13.735 14.4278 13.985 14.5292 14.189 14.7319C14.393 14.9347 14.495 15.1859 14.495 15.4857C14.495 15.7797 14.3936 16.0297 14.1909 16.2357C13.9881 16.4418 13.7369 16.5448 13.4371 16.5448ZM1.74043 20.7482C1.27041 20.7482 0.862825 20.5756 0.517685 20.2305C0.172562 19.8853 0 19.4778 0 19.0077V3.27931C0 2.80762 0.172562 2.3986 0.517685 2.05227C0.862825 1.70592 1.27041 1.53275 1.74043 1.53275H3.34593V0H5.11025V1.53275H13.5881V0H15.3524V1.53275H16.9579C17.4296 1.53275 17.8386 1.70592 18.185 2.05227C18.5313 2.3986 18.7045 2.80762 18.7045 3.27931V19.0077C18.7045 19.4778 18.5313 19.8853 18.185 20.2305C17.8386 20.5756 17.4296 20.7482 16.9579 20.7482H1.74043ZM1.74043 19.0077H16.9579V8.07803H1.74043V19.0077Z" fill="#0D7AFF"/>
                        </svg>
                    </div>
                    <input value="10/24/1984" type="text" name="daterange" class="bg-white input-datepicker-normal box-shadow outline-0 max-w-[100%] montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block w-full px-[14px] py-[18px]" placeholder="Select date">
                    </div>
                </div>
                <div class="col-span-12 md:col-span-2">
                    <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Payment due date</label>
                    <div class="relative max-w-sm">
                    <div class="absolute inset-y-0 right-[18px] flex items-center pl-3 pointer-events-none">
                        <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.34982 12.4575C9.0501 12.4575 8.79866 12.3561 8.59548 12.1533C8.39229 11.9506 8.2907 11.6993 8.2907 11.3996C8.2907 11.0999 8.39207 10.8484 8.59482 10.6453C8.79758 10.4421 9.04883 10.3405 9.34855 10.3405C9.64827 10.3405 9.89971 10.4419 10.1029 10.6446C10.3061 10.8474 10.4077 11.0986 10.4077 11.3983C10.4077 11.6981 10.3063 11.9495 10.1036 12.1527C9.90079 12.3559 9.64954 12.4575 9.34982 12.4575ZM5.2625 12.4575C4.96278 12.4575 4.71134 12.3561 4.50816 12.1533C4.30497 11.9506 4.20338 11.6993 4.20338 11.3996C4.20338 11.0999 4.30475 10.8484 4.5075 10.6453C4.71026 10.4421 4.96151 10.3405 5.26123 10.3405C5.56095 10.3405 5.81239 10.4419 6.01557 10.6446C6.21876 10.8474 6.32035 11.0986 6.32035 11.3983C6.32035 11.6981 6.21898 11.9495 6.01623 12.1527C5.81347 12.3559 5.56222 12.4575 5.2625 12.4575ZM13.4371 12.4575C13.1431 12.4575 12.8931 12.3561 12.6871 12.1533C12.481 11.9506 12.378 11.6993 12.378 11.3996C12.378 11.0999 12.4808 10.8484 12.6864 10.6453C12.892 10.4421 13.1429 10.3405 13.4389 10.3405C13.735 10.3405 13.985 10.4419 14.189 10.6446C14.393 10.8474 14.495 11.0986 14.495 11.3983C14.495 11.6981 14.3936 11.9495 14.1909 12.1527C13.9881 12.3559 13.7369 12.4575 13.4371 12.4575ZM9.34982 16.5448C9.0501 16.5448 8.79866 16.442 8.59548 16.2364C8.39229 16.0308 8.2907 15.7799 8.2907 15.4839C8.2907 15.1878 8.39207 14.9378 8.59482 14.7338C8.79758 14.5298 9.04883 14.4278 9.34855 14.4278C9.64827 14.4278 9.89971 14.5292 10.1029 14.7319C10.3061 14.9347 10.4077 15.1859 10.4077 15.4857C10.4077 15.7797 10.3063 16.0297 10.1036 16.2357C9.90079 16.4418 9.64954 16.5448 9.34982 16.5448ZM5.2625 16.5448C4.96278 16.5448 4.71134 16.442 4.50816 16.2364C4.30497 16.0308 4.20338 15.7799 4.20338 15.4839C4.20338 15.1878 4.30475 14.9378 4.5075 14.7338C4.71026 14.5298 4.96151 14.4278 5.26123 14.4278C5.56095 14.4278 5.81239 14.5292 6.01557 14.7319C6.21876 14.9347 6.32035 15.1859 6.32035 15.4857C6.32035 15.7797 6.21898 16.0297 6.01623 16.2357C5.81347 16.4418 5.56222 16.5448 5.2625 16.5448ZM13.4371 16.5448C13.1431 16.5448 12.8931 16.442 12.6871 16.2364C12.481 16.0308 12.378 15.7799 12.378 15.4839C12.378 15.1878 12.4808 14.9378 12.6864 14.7338C12.892 14.5298 13.1429 14.4278 13.4389 14.4278C13.735 14.4278 13.985 14.5292 14.189 14.7319C14.393 14.9347 14.495 15.1859 14.495 15.4857C14.495 15.7797 14.3936 16.0297 14.1909 16.2357C13.9881 16.4418 13.7369 16.5448 13.4371 16.5448ZM1.74043 20.7482C1.27041 20.7482 0.862825 20.5756 0.517685 20.2305C0.172562 19.8853 0 19.4778 0 19.0077V3.27931C0 2.80762 0.172562 2.3986 0.517685 2.05227C0.862825 1.70592 1.27041 1.53275 1.74043 1.53275H3.34593V0H5.11025V1.53275H13.5881V0H15.3524V1.53275H16.9579C17.4296 1.53275 17.8386 1.70592 18.185 2.05227C18.5313 2.3986 18.7045 2.80762 18.7045 3.27931V19.0077C18.7045 19.4778 18.5313 19.8853 18.185 20.2305C17.8386 20.5756 17.4296 20.7482 16.9579 20.7482H1.74043ZM1.74043 19.0077H16.9579V8.07803H1.74043V19.0077Z" fill="#0D7AFF"/>
                        </svg>
                    </div>
                    <input value="10/24/1984" type="text" name="daterange" class="bg-white input-datepicker-normal box-shadow outline-0 max-w-[100%] montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block w-full px-[14px] py-[18px]" placeholder="Select date">
                    </div>
                </div>
                <div class="col-span-12 md:col-span-2 custom-select custom-select3">
                    <select id="countries" class="bg-white w-[100%] box-shadow select-custom outline-0 max-w-[100%] montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block w-full px-[14px] py-[18px]">
                    <option selected="">On Receipt</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                    </select>
                </div>
                <div class="col-span-12 md:col-span-2">

                </div>
            </div>

            <div class="grid grid-cols-12 mt-[40px] gap-[20px] items-center py-[14px] px-[17px] mb-[20px] hidden md:grid bg-silver-light rounded-[10px]">
                <div class="col-span-2">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">ITEM</p>
                </div>
                <div class="col-span-4">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">DETAILS</p>
                </div>
                <div class="col-span-2">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">PRICING</p>
                </div>
                <div class="col-span-2">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">QUANTITY</p>
                </div>
                <div class="col-span-2">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase ml-[10px]">TOTAL</p>
                </div>
            </div>

            <div class="grid grid-cols-12 md:grid-cols-12 gap-[20px] items-center">
                <div class="col-span-12 md:col-span-2">
                    <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0" placeholder="Item"/>
                </div>
                <div class="col-span-12 md:col-span-4">
                    <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0" placeholder="Enter item description"/>
                </div>
                <div class="col-span-12 md:col-span-2">
                    <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0" placeholder="N$ 00.00"/>
                </div>
                <div class="col-span-12 md:col-span-2 text-right md:text-left">
                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0" placeholder="1"/>
                </div>
                <div class="col-span-12 md:col-span-2 flex justify-between items-center">
                                    <span class="text-[#3E3E3E] text-[14px] leading-[21px]">00.00</span>
                                    <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.94925 20C2.47867 20 2.07256 19.8314 1.73092 19.4942C1.38929 19.1569 1.21848 18.7561 1.21848 18.2915V2.17539H0.680762C0.487501 2.17539 0.325731 2.11057 0.195451 1.98092C0.0651502 1.85128 0 1.69031 0 1.49803C0 1.30572 0.0651502 1.14654 0.195451 1.02049C0.325731 0.894457 0.487501 0.83144 0.680762 0.83144H5.1323C5.1323 0.589977 5.21668 0.391038 5.38544 0.234622C5.55418 0.0782073 5.75826 0 5.99768 0H12.0023C12.2417 0 12.4458 0.0794906 12.6146 0.238472C12.7833 0.397454 12.8677 0.59511 12.8677 0.83144H17.3192C17.5125 0.83144 17.6743 0.896263 17.8045 1.02591C17.9348 1.15553 18 1.3165 18 1.50881C18 1.70111 17.9348 1.86028 17.8045 1.98631C17.6743 2.11236 17.5125 2.17539 17.3192 2.17539H16.7815V18.2915C16.7815 18.7561 16.6107 19.1569 16.2691 19.4942C15.9274 19.8314 15.5213 20 15.0507 20H2.94925ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H15.0507C15.1507 18.656 15.2373 18.6219 15.3104 18.5535C15.3835 18.4852 15.42 18.3979 15.42 18.2915V2.17539H2.57998ZM6.03695 15.4829C6.03695 15.6737 6.10261 15.8334 6.23393 15.962C6.36527 16.0906 6.52835 16.1549 6.72317 16.1549C6.91797 16.1549 7.07922 16.0906 7.20692 15.962C7.3346 15.8334 7.39844 15.6737 7.39844 15.4829V5.31889C7.39844 5.13552 7.33278 4.97769 7.20146 4.84538C7.07012 4.71307 6.90704 4.64691 6.71222 4.64691C6.51742 4.64691 6.35617 4.71307 6.22847 4.84538C6.10079 4.97769 6.03695 5.13552 6.03695 5.31889V15.4829ZM10.6016 15.4829C10.6016 15.6737 10.6672 15.8334 10.7985 15.962C10.9299 16.0906 11.093 16.1549 11.2878 16.1549C11.4826 16.1549 11.6438 16.0906 11.7715 15.962C11.8992 15.8334 11.963 15.6737 11.963 15.4829V5.31889C11.963 5.13552 11.8974 4.97769 11.7661 4.84538C11.6347 4.71307 11.4716 4.64691 11.2768 4.64691C11.082 4.64691 10.9208 4.71307 10.7931 4.84538C10.6654 4.97769 10.6016 5.13552 10.6016 5.31889V15.4829ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H2.57998V2.17539Z" fill="#0D7AFF"/>
                                        </svg>
                                    </a>
                </div>
            </div>

            <hr class="bg-[#E4E4E4] mt-[20px] mb-[19px]"/>

                            <button href="" class="w-full whitespace-nowrap montserrat flex items-center justify-center py-[16px] px-[14px] rounded-[10px] bg-[#408FEF1A]  hover:bg-[#408FEF]/20 text-[#0D7AFF] font-semibold text-[14px] leading-[17px]">
                                <span class="mr-[12px] plus-icon"></span>
                                Add an item
                            </button>
            <hr class="bg-[#E4E4E4] mt-[20px] mb-[16px]"/>

            <div class="mb-[16px] flex justify-end">
                <div class="pr-[73px]">
                <span class="textt-right mr-[40px] text-[14px] leading-[21x] text-[#3E3E3E] font-semibold">Sub total</span>
                <span class="text-[14px] leading-[21x] text-[#3E3E3E]">00.00</span>
                </div>
            </div>

            <div class="mb-[16px] flex justify-end">
                <div class="pr-[43px] flex items-center">
                <span class="textt-right mr-[30px] text-[14px] leading-[21x] text-[#3E3E3E] font-semibold">Discount</span>
                <p class="bg-[#003F6C0D] rounded-[10px] h-[45px] w-[80px] flex items-center justify-between px-[15px]">
                    <span class="text-[#3E3E3E] text-[14px] leading-[21px]">1</span>
                    <span class="text-[#A9AFB5] text-[14px] leading-[21px]">%</span>
                </p>
                </div>
            </div>

            <div class="flex justify-end">
                <div class="pr-[73px]">
                <span class="textt-right mr-[40px] text-[14px] leading-[21x] text-[#3E3E3E] font-semibold">Grand total</span>
                <span class="text-[14px] leading-[21x] text-[#3E3E3E]">00.00</span>
                </div>
            </div>

            <hr class="bg-[#E4E4E4] mt-[14px] mb-[19px]"/>

            <p class="text-right text-[#3E3E3E] text-[14px] leading-[21px] mb-0 font-semibold">Currency conversion: N$ 0.00 (NAD) at</p>

                </div> 



        </div>

        <div class="bg-gradient-white2 p-[35px] rounded-[20px] mt-[20px] mb-[39px]">
            <div class="flex justify-between items-center mb-[23px]">
                <h2 class="text-[20px] leading-[24px] text-[#003F6C] font-semibold">Footer</h2>     
            </div>


<form>
   <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
       <div class="flex items-center justify-between px-3 py-2 border-b dark:border-gray-600">
           <div class="flex flex-wrap items-center divide-gray-200 sm:divide-x dark:divide-gray-600">
               <div class="flex items-center space-x-1 sm:pr-4">
                   <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                       <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path></svg>
                       <span class="sr-only">Attach file</span>
                   </button>
                   <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                       <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                       <span class="sr-only">Embed map</span>
                   </button>
                   <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                       <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path></svg>
                       <span class="sr-only">Upload image</span>
                   </button>
                   <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                       <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Format code</span>
                   </button>
                   <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                       <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z" clip-rule="evenodd"></path></svg>
                       <span class="sr-only">Add emoji</span>
                   </button>
               </div>
               <div class="flex flex-wrap items-center space-x-1 sm:pl-4">
                   <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                       <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                       <span class="sr-only">Add list</span>
                   </button>
                   <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                       <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>       
                       <span class="sr-only">Settings</span>
                   </button>
                   <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                       <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                       <span class="sr-only">Timeline</span>
                   </button>
                   <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                       <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                       <span class="sr-only">Download</span>
                   </button>
               </div>
           </div>
           <button type="button" data-tooltip-target="tooltip-fullscreen" class="p-2 text-gray-500 rounded cursor-pointer sm:ml-auto hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
               <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 11-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010-2h4a1 1 0 011 1v4a1 1 0 01-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 012 0v1.586l2.293-2.293a1 1 0 111.414 1.414L6.414 15H8a1 1 0 010 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 010-2h1.586l-2.293-2.293a1 1 0 111.414-1.414L15 13.586V12a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
               <span class="sr-only">Full screen</span>
           </button>
           <div id="tooltip-fullscreen" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
               Show full screen
               <div class="tooltip-arrow" data-popper-arrow></div>
           </div>
       </div>
       <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
           <label for="editor" class="sr-only">Publish post</label>
           <textarea id="editor" rows="8" class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write an article..." required></textarea>
       </div>
   </div>
</form>


        </div>

                <div class="text-right flex items-end justify-end">
                    <button class="bg-white hover:bg-[#408FEF1A] box-shadow text-[#0D7AFF] rounded-[10px] montserrat font-semibold text-[14px] leading-[17px] px-[15px] py-[15px] mr-[20px]">Preview</button>
                    <button class="bg-[#003F6C] hover:bg-[#002743] box-shadow min-w-[180px] text-white rounded-[10px] montserrat font-semibold text-[14px] leading-[17px] px-[37px] py-[15px]">Save and continue</button>
                </div>

    </div>
</div>

<?php include('./footer.php');?>

<?php include('./footer-bot.php');?>