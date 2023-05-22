<?php include('./header.php'); ?>

<div class="flex md:pb-[84px]">
    <?php include('./sidebar.php'); ?>
    <div class="bg-[#EBF4F8] py-[16px] pb-[48px] px-[9px] lg:p-[27px] lg:rounded-[40px] w-full lg:mr-[40px]">


        <div class="flex flex-wrap md:flex-nowrap mb-[35px] px-[16px] md:px-0">
            <a href="./settings.php" class="bg-white text-[#003F6C] mb-[15px] md:mb-0 hover:bg-[#0D7AFF] hover:text-white rounded-[20px] font-semibold text-[14px] leading-[21px] mr-[15px] px-[20px] py-[10px] flex items-center justify-center">General</a>
            <a href="./settings-password.php" class="bg-white text-[#003F6C] mb-[15px] md:mb-0 hover:bg-[#0D7AFF] hover:text-white rounded-[20px] font-semibold text-[14px] leading-[21px] mr-[15px] px-[20px] py-[10px] flex items-center justify-center">Password</a>
            <a href="./settings-bussiness.php" class="bg-white text-[#003F6C] mb-[15px] md:mb-0 hover:bg-[#0D7AFF] hover:text-white rounded-[20px] font-semibold text-[14px] leading-[21px] mr-[15px] px-[20px] py-[10px] flex items-center justify-center">Business</a>
            <a href="./settings-invoice.php" class="bg-white text-[#003F6C] mb-[15px] md:mb-0 hover:bg-[#0D7AFF] hover:text-white rounded-[20px] font-semibold text-[14px] leading-[21px] mr-[15px] px-[20px] py-[10px] flex items-center justify-center">Invoice</a>
            <a href="./settings-roles.php" class="bg-white text-[#003F6C] mb-[15px] md:mb-0 hover:bg-[#0D7AFF] hover:text-white rounded-[20px] font-semibold text-[14px] leading-[21px] mr-[15px] px-[20px] py-[10px] flex items-center justify-center">Roles</a>
            <a href="./settings-permissions.php" class="bg-white text-[#003F6C] mb-[15px] md:mb-0 hover:bg-[#0D7AFF] hover:text-white rounded-[20px] font-semibold text-[14px] leading-[21px] mr-[15px] px-[20px] py-[10px] flex items-center justify-center">Permissions</a>
            <a href="./settings-staff.php" class="bg-white text-[#003F6C] mb-[15px] md:mb-0 hover:bg-[#0D7AFF] hover:text-white rounded-[20px] font-semibold text-[14px] leading-[21px] px-[20px] py-[10px] flex items-center justify-center">Staff</a>
        </div>

        <div class="bg-gradient-white2 px-[21px] py-[26px] md:p-[35px] rounded-[20px]">

            <h2 class="text-[#003F6C] font-semibold text-[24px] leading-[36px] mb-[28px]">Assign Permissions</h2>

            <div class="flex flex-wrap md:no-wrap justify-between items-center mb-[35px] rounded-[10px]">
                            <div class="flex flex-wrap md:flex-nowrap">
                                <span class="custom-select custom-select9">
                                <select id="countries" class="bg-white w-[100%] mb-[10px] md:mb-0 md:mr-[45px] md:w-auto box-shadow outline-0 min-w-[238px] max-w-[100%] montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block w-full px-[14px] py-[18px]">
                                <option selected="">Select role</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                                </select>
                                </span>
                                <div class="flex items-center mr-[44px]">
                                    <input class="rounded-[6px] w-[21px] h-[21px] mr-[11px]" type="checkbox" id="scales" name="scales" checked>
                                    <span class="text-[#003F6C] font-semibold text-[12px] leading-[18px] flex items-center justify-center rounded-[20px] bg-[#54BE5F1A]/10 px-[20px] py-[7px]">Available</span>
                                </div>
                                <div class="flex items-center">
                                    <input class="rounded-[6px] w-[21px] h-[21px] mr-[11px]" type="checkbox" id="scales" name="scales">
                                    <span class="text-[#003F6C] font-semibold text-[12px] leading-[18px] flex items-center justify-center rounded-[20px] bg-[#FF0F001A]/10 px-[20px] py-[7px]">Not available</span>
                                </div>
                            </div>
                            <a href="" class="w-full md:w-auto justify-center md:justify-start mt-[35px] md:mt-0 whitespace-nowrap montserrat flex items-center py-[16px] px-[14px] rounded-[10px] bg-[#408FEF1A]  hover:bg-[#408FEF]/20 text-[#0D7AFF] font-semibold text-[14px] leading-[17px]">
                                <span class="mr-[12px] plus-icon"></span>
                                Add New Role
                            </a>      
            </div>

            <div class="grid grid-cols-10 gap-[15px] items-center py-[14px] px-[17px] md:grid bg-silver-light rounded-[10px]">
                <div class="col-span-2">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">Module</p>
                </div>
                <div class="col-span-2 text-center">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">add permission</p>
                </div>
                <div class="col-span-2 text-center">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">EDIT permission</p>
                </div>
                <div class="col-span-2 text-center">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">Delete permission</p>
                </div>
                <div class="col-span-2 text-center">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">View permission </p>
                </div>
            </div>

            <div class="grid grid-cols-10 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-2 md:col-span-2">
                    <p class="text-[#3E3E3E] font-semibold text-[14px] leading-[21px]">Assign Permissions</p>
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-10 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-2 md:col-span-2">
                    <p class="text-[#3E3E3E] font-semibold text-[14px] leading-[21px]">Business</p>
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-10 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-2 md:col-span-2">
                    <p class="text-[#3E3E3E] font-semibold text-[14px] leading-[21px]">Category</p>
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-10 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-2 md:col-span-2">
                    <p class="text-[#3E3E3E] font-semibold text-[14px] leading-[21px]">Change Password</p>
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-10 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-2 md:col-span-2">
                    <p class="text-[#3E3E3E] font-semibold text-[14px] leading-[21px]">Country</p>
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-10 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-2 md:col-span-2">
                    <p class="text-[#3E3E3E] font-semibold text-[14px] leading-[21px]">Customer</p>
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-10 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-2 md:col-span-2">
                    <p class="text-[#3E3E3E] font-semibold text-[14px] leading-[21px]">Dashboard</p>
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-10 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-2 md:col-span-2">
                    <p class="text-[#3E3E3E] font-semibold text-[14px] leading-[21px]">Quotation</p>
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-10 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-2 md:col-span-2">
                    <p class="text-[#3E3E3E] font-semibold text-[14px] leading-[21px]">Expense</p>
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-10 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-2 md:col-span-2">
                    <p class="text-[#3E3E3E] font-semibold text-[14px] leading-[21px]">General Reports</p>
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-10 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-2 md:col-span-2">
                    <p class="text-[#3E3E3E] font-semibold text-[14px] leading-[21px]">Invoices</p>
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-10 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-2 md:col-span-2">
                    <p class="text-[#3E3E3E] font-semibold text-[14px] leading-[21px]">Invoice Customization</p>
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
                <div class="col-span-2 md:col-span-2 text-center">
                    <input class="rounded-[6px] w-[21px] h-[21px]" type="checkbox" id="scales" name="scales">
                </div>
            </div>

                <div class="text-right flex items-end justify-end mt-[41px] md:mt-[55px]">
                    <button class="bg-[#003F6C] w-full md:w-auto hover:bg-[#002743] box-shadow text-white rounded-[10px] min-w-[180px] montserrat font-semibold text-[14px] leading-[17px] px-[37px] py-[15px]">Submit</button>
                </div>

        </div>
    </div>
</div>

<?php include('./footer.php');?>

<?php include('./footer-bot.php');?>