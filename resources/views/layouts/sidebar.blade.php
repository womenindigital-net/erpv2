<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    <div data-simplebar class="h-100">

        <!--- SideMenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                {{-- <li>
                    <a href="index" class="waves-effect active">
                        <i class="bx bx-home-circle"></i>
                        <span>Starter Page</span>
                    </a>
                </li> --}}
                <li>
                    <a href="/dashboard" class="waves-effect active">
                        <i class="bx bx-home-circle"></i>
                        <span>DashBoard</span>
                    </a>
                </li>

                <li class="menu-title">Accounting</li>

                
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Income Receive</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('student-income.create') }}">Student Income</a></li>
                        <li><a href="{{ route('sale-voucher.create') }}">Sale Voucher</a></li>
                        <li><a href="{{ route('donation-and-other.create') }}">Donation And Other</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Payment </span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('requisition.create') }}">Requisition</a></li>
                        <li><a href="{{ route('purchase-order.create') }}">Purchase Order</a></li>
                        {{-- <li><a href="{{ route('purchase-return.create') }}">Purchase Return</a></li> --}}
                        <li><a href="{{ route('supplier-payment.create') }}">Supplier Payment</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Direct Payment</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('direct-payment.create') }}">Payment Add</a>
                                </li>
                                <li>
                                    <a href="{{ route('cash-payment.list') }}">Payment List</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Stock Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('stock-receive.create') }}">Stock Receive</a></li>
                        <li><a href="{{ route('finished-goods.create') }}">Finished Goods</a></li>
                        <li><a href="{{ route('material-collect.create') }}">Material Collects</a></li>
                        <li><a href="{{ route('stock-transfer.create') }}">Stock Transfer</a></li>
                        <li><a href="{{ route('stockCount.report') }}">Stock Count</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Inventory Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('stock-assign.create') }}">Stock Assign</a></li>
                        <li><a href="{{ route('stock-out.create') }}">Stock Out</a></li>
                        <li><a href="{{ route('stock-hand-report') }}">Stock On Hand Report</a></li>
                        <li><a href="{{ route('stock-product-report') }}">Location Wise Product Report</a></li>
                        <li><a href="{{ route('stock-reorder-report') }}">Stock Reorder Report</a></li>
                        <li><a href="{{ route('stock_receive_report') }}">Stock Receive Report</a></li>
                        <li><a href="{{ route('product-analysis-report') }}">Report::Product Analysis</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Reporting</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('accounting.reporting.trail-balance.create') }}">Trail Balance</a></li>
                        <li><a href="{{ route('accounting.reporting.p&l-statement.create') }}">P&L Statement</a></li>
                        <li><a href="{{ route('accounting.reporting.balance-sheet.create') }}">Balance Sheet</a></li>
                    </ul>
                </li>

                <li class="menu-title">Program Modules</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Pre Admission</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('appointment.create') }}">Appointment</a></li>
                        <li><a href="{{ route('case-history.create') }}">Case History</a></li>
                        <li><a href="{{ route('care-need-part-one.create') }}">CARE Needs - Part 1 (PA1OT)</a></li>
                        <li><a href="{{ route('care-need.create') }}">CARE Needs - Part 2 (PA2OT)</a></li>
                        <li><a href="{{ route('referral.create') }}">Referral Form</a></li>

                    </ul>
                </li>
                <li>
                    <a href="{{ route('admission.addStudent') }}" class="waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Admission</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Assessment</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('sensory-checklist-child.create') }}">Sensory checklist for Child</a>
                        </li>
                        <li><a href="{{ route('social-communication.create') }}">Social Communication</a></li>
                        <li><a href="{{ route('occupational-therapy.create') }}">Occupational Therapy</a></li>
                        <li><a href="{{ route('physiotherapy.create') }}">Physiotherapy</a></li>
                        <li><a href="{{ route('functional-communication.create') }}">Functional Communication
                                Assessment</a></li>
                        <li><a href="{{ route('functional-movement-skill.create') }}">Fundamental Movement
                                Skills</a></li>
                        <li><a href="{{ route('executive-function.create') }}">Executive Function test</a></li>
                        <li><a href="{{ route('autisum-behaviour.create') }}">Autism Behavior Checklist (ABC)</a>
                        </li>
                        <li><a href="{{ route('sensory-checklist-adult.create') }}">Sensory checklist for Young
                                Adult</a>
                        </li>
                        <li><a href="{{ route('individual-risk.create') }}">Individual risk assessment form</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Students</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('student.create') }}">Students</a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Dairy
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="{{ route('trip.create') }}">Trip report and Evaluation Form</a>
                                </li>
                                <li>
                                    <a href="{{ route('gym-and-outing.create') }}">Gym and Outing Evaluation (D3cDT)
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('ot-assessment.create') }}">OT assessment in computer
                                        trainee</a>
                                </li>
                                <li>
                                    <a href="{{ route('incident-record.create') }}">Incident Record</a>
                                </li>
                                <li>
                                    <a href="{{ route('medicine-admin.create') }}">Medicine admin</a>
                                </li>
                                {{-- <li>
                                    <a href="student.dairy.score-calculation">Score Calculation</a>
                                </li>
                                <li>
                                    <a href="student.dairy.itp-evolution">ITP Evolution</a>
                                </li> --}}
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Co Curricular</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li> <a href="{{ route('drama-diary-evaluation.create') }}">Drama Diary
                                        Evaluation</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ route('student-attendance.create') }}">Student Attendence</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Employment</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li> <a href="{{ route('staff-and-workplaceinspection.create') }}">কর্মী ও কর্মস্থল
                                        পরিদর্শন টুল</a> </li>
                            </ul>
                        </li>
                        <li><a href="{{ route('vocational-evaluation.create') }}">Vocational Evalution</a></li>
                    </ul>

                </li>
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Online Class</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="/report">Report</a></li>
                        <li><a href="/create-task">Create Task</a></li>
                        <li><a href="/create-itp">Create ITP</a></li>
                        <li><a href="/assign-teacher">Assign Teacher</a></li>
                        <li><a href="/task-assign">Task Assign</a></li>
                        <li><a href="/create-homework">Create Homework</a></li>
                        <li><a href="/assign-homework">Assign Homework</a></li>
                        <li><a href="/create-tutorial">Create Tutorial</a></li>
                        <li><a href="/assign-tutorial">Assign Tutorial</a></li>
                        <li><a href="/class-lists">Class Lists</a></li>
                        <li><a href="/assign-class">Assign Class</a></li>
                        <li><a href="/weekly-task-plan">Weekly Task Plan</a></li>
                        <li><a href="/date-wise-teacher-ttendance">Date Wise Teacher Attendance</a></li>
                        <li><a href="/month-wise-teacher-attendance">Month Wise Teacher Attendance</a></li>
                        <li><a href="/teacher-attendance">Teacher Attendance</a></li>
                    </ul>
                </li> --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Program</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('assign-task.create') }}">Assign Task</a></li>
                        <li><a href="{{ route('create-itp.create') }}">Create ITP</a></li>
                        <!-- <li><a href="{{ route('run-mitp.create') }}">Run MITP</a></li> -->
                        <li><a href="{{ route('notice-board.create') }}">Notice Board</a></li>
                        <li><a href="{{ route('assign-teacher.create') }}"> Assign Teacher</a></li>
                        {{-- <li><a href="/">Score Calculator </a></li>
                        <li><a href="/p-create-task">Create Task </a></li>
                        <li><a href="/p-admission-request">Admission Request </a></li> --}}
                    </ul>
                </li>
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Multi_Level</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);">Level_1.1</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                                key="t-level-1-2">@lang('translation.Level_1.2')</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="javascript: void(0);">Level_2.1</a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);">Level_2.2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}
                <li class="menu-title">Setup</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Accounting Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('journal.create') }}" class="waves-effect">
                                <span>Journal</span>
                            </a>
                        </li>
                        <li><a href="{{ route('supplier.create') }}">Supplier Setup</a></li>
                        <li><a href="{{ route('supplier-type.create') }}">Supplier Type Setup</a></li>
                        <li><a href="{{ route('project.create') }}">Project Setup</a></li>
                        <li><a href="{{ route('customer-reg-list.create') }}">Customer Reg.</a></li>
                        <li><a href="{{ route('customer-type.create') }}">Customer Type</a></li>
                        <li><a href="{{ route('donor.create') }}">Donor Setup</a></li>
                        <li><a href="{{ route('warehouse.create') }}">Warehouse Setup</a></li>
                        <li><a href="{{ route('chartof-accounts.create') }}">Chart Of Accounts</a></li>
                        <li><a href="{{ route('bank-account.create') }}">Bank Account Details</a></li>
                        <li><a href="{{ route('cheque.create') }}">Manage Bank Ac. Chequebook</a></li>
                        <li><a href="{{ route('bank-reconcilation-new.create') }}">Bank Reconcilation New</a>
                        </li>
                        <li><a href="{{ route('setup.bank-reconcilation.create') }}">Bank Reconcilation</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Accounting Mapping</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{ route('account_mapping.create') }}">Accounting
                                        Mapping</a></li>
                                <li><a href="{{ route('account-year.create') }}">Accounting
                                        Year Setup</a></li>
                                <li><a href="{{ route('closing_account.create') }}">Closing
                                        Accounting Setup</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Store Management</a>
                            <ul class="sub-menu" aria-expanded="true">

                                <li><a href="{{ route('unit.create') }}">Measure Unit Setup</a></li>
                                <li><a href="{{ route('category.create') }}">Product Category Setup</a>
                                </li>

                                <li><a href="{{ route('product.create') }}">Product Create</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Budget & Forecasting</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{ route('budget-year.create') }}">Budget Year Setup</a> </li>
                                <li><a href="{{ route('budget-head.create') }}">Budget Head Setup</a> </li>
                                <li><a href="{{ route('budget-template.create') }}">Budget Template Setup</a></li>
                                <li><a href="{{ route('budget-review.create') }}">Budget Review</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Year End Close</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li> <a href="{{ route('yearend.create') }}">Year End Stock Count</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-share-alt"></i>
                        <span>Program Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li> <a href="{{ route('prescription.create') }}">Prescription</a> </li>
                        {{-- <li> <a href="{{ route('activity.create') }}">Activity create</a>
                        </li> --}}
                        <li> <a href="{{ route('task.create') }}">Task create</a> </li>
                        <li> <a href="{{ route('task-weight.create') }}">Task Weight Setup</a></li>
                        <li> <a href="{{ route('course.create') }}">Course Setup</a> </li>
                        <li> <a href="{{ route('attendence-card.create') }}">Attendence
                                card
                                setup</a></li>
                        {{-- <li> <a href="{{ route('vocational-catagorySub.create') }}">Vocational
                                Category and subcategory setup</a></li> --}}
                        <li> <a href="{{ route('academic-calender.create') }}">Academic
                                Celender Create</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Vocational Marking</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{ route('Vocational-Mcategory.create') }}">Vocational
                                        Marking
                                        Category</a></li>
                                <li><a href="{{ route('vocational-sub-category.create') }}">Vocational
                                        Marking Sub Category</a></li>
                                <li><a href="{{ route('setup.vocational-student-evolution.create') }}">Vocational
                                        Student Evolution</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Students details profile</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="setup.students-details">Students Details Profile</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-share-alt"></i>
                        <span>HR Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Payroll Management</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('salary-grade.create') }}">Salary
                                        Grade Setup</a></li>
                                <li><a href="{{ route('salary-step.create') }}">Salary
                                        Step Setup</a></li>
                                <li><a href="{{ route('salary-head.create') }}">Salary
                                        Head Setup</a></li>
                                <li><a href="{{ route('setup.payroll-management.salary_package_setup.create') }}">Salary
                                        Package Setup</a></li>
                                <li><a href="{{ route('budget-year.create') }}">Salary
                                        Budget Setup</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('setup.employee-information.create') }}">Employee information </a>
                        </li>
                        <li><a href="{{ route('attendance-policy.create') }}">Attendance policy
                                setup</a>
                        </li>
                        <li><a href="{{ route('leave-type.create') }}">Leave Type</a></li>
                        <li><a href="{{ route('leave-package.create') }}">Leave Package</a></li>
                        <li><a href="{{ route('create-product.create') }}">create product</a></li>
                        <li><a href="{{ route('certificate.create') }}">Certificate Setup</a></li>
                        <li><a href="{{ route('employee-type.create') }}">Employee Type Setup</a></li>
                        <li><a href="{{ route('department.create') }}">Department setup</a></li>
                        <li><a href="{{ route('weekend-package.create') }}">Weekend Package Setup</a></li>
                        <li><a href="{{ route('HR.facility-package.create') }}">Facility Package Setup</a></li>
                        <li><a href="{{ route('bonus-package.create') }}">Bonous Package Setup</a></li>
                        <li><a href="{{ route('currency.create') }}">Currency Setup</a></li>
                        <li><a href="{{ route('result.create') }}">Result Setup</a></li>
                        <li><a href="{{ route('institute.create') }}">Institute Setup</a></li>
                        <li><a href="{{ route('organization.create') }}">Organization Setup </a></li>
                        <li><a href="{{ route('section.create') }}">Section Setup</a></li>
                        <li><a href="{{ route('designation.create') }}">Designation Setup</a></li>
                        <li><a href="{{ route('notice-template-setup.create') }}">Notice Template Setup</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>General Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Company Setup</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li> <a href="{{ route('company.create') }}">Company Setup</a></li>
                            </ul>
                        </li>
                        {{-- <li>
                            <a href="javascript: void(0);" class="has-arrow">Project Setup</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="{{ route('setup.project-setup.create') }}">Project Setup</a>
                                </li>
                            </ul>
                        </li> --}}
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Doctor Setup</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="{{ route('doctor.create') }}">Doctor Setup</a>
                                </li>
                            </ul>
                        </li>


                        {{-- <li>
                            <a href="javascript: void(0);" class="has-arrow">Bank Details Setup</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="{{ route('bank-account.create') }}">Account Details</a>
                                </li>
                                <li>
                                    <a href="{{ route('cheque.create') }}">Manage Chequebook</a>
                                </li>
                            </ul>
                        </li> --}}
                        <li>
                            {{-- <a href="javascript: void(0);" class="has-arrow">Bank Reconcilation</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="{{ route('setup.bank-reconcilation-new.create') }}">Bank Reconcilation
                                        New</a>
                                </li>
                                <li>
                                    <a href="{{ route('setup.bank-reconcilation.create') }}">Bank Reconcilation</a>
                                </li>
                            </ul>
                        </li> --}}
                        {{-- <li>
                            <a href="javascript: void(0);" class="has-arrow">Vendor List</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="{{ route('setup.vendor-list.supplier-setup.create') }}">Supplier Setup</a>
                                </li>
                                <li>
                                    <a href="{{ route('setup.vendor-list.supplier-type-setup.create') }}">Supplier Type
                                        Setup</a>
                                </li>
                            </ul>
                        </li> --}}
                        {{-- <li>
                            <a href="javascript: void(0);" class="has-arrow">Customer List</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="{{ route('setup.customers-list.customer-reg.create') }}">Customer
                                        Reg.</a>
                                </li>
                                <li>
                                    <a href="{{ route('setup.customers-list.customer-type.create') }}">Customer
                                        Type</a>
                                </li>
                            </ul>
                        </li> --}}
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">User</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{ route('user.create') }}">User</a> </li>
                                <li><a href="{{ route('setup.other-settings.user-permission-setup.create') }}">User
                                        Permission </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Other Settings</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{ route('academic-calender.create') }}">Academic
                                        Calendar </a></li>
                                <li><a href="{{ route('setup.other-settings.task-weight-settings.create') }}">Task
                                        Weight </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <li class="menu-title">Notice Board</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span> All Notice</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('HR.warning-notice.create') }}">Warning Notice</a></li>
                        <li><a href="{{ route('HR.show-case-notice.create') }}">Show Case Notice</a></li>
                    </ul>
                </li>


                <li class="menu-title">HR Admin Modules</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>HR Admin</span>
                    </a>
                    <ul class="sub-menu " aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effects">Recruitment</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{ route('employee-requisition.create') }}">Employee
                                        Requisition</a>
                                </li>
                                <li><a href="{{ route('apply.create') }}">Apply for Job</a></li>
                                <li><a href="{{ route('HR.applicant-list.create') }}">Applicant List</a></li>
                                <li><a href="{{ route('send-mail.create') }}">Sent Mail</a></li>
                                <li><a href="{{ route('assign-interviewer.create') }}">Assign Interviewer</a>
                                </li>
                                <li><a href="{{ route('HR.interview-rating-form.create') }}">Interview Rating
                                        Form</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effects">Recruit</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{ route('job-confirmation.create') }}">Job
                                        Confirmation</a>
                                </li>
                                <li><a href="{{ route('job-contact.create') }}">Job Contact</a></li>
                                <li><a href="{{ route('reporting-memo.create') }}">Reporting Memo</a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li>
                            <a href="javascript: void(0);" class="has-arrow">HR Setup</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{ route('HR.certificate-setup.create') }}">Certificate Setup</a></li>
                                <li><a href="{{ route('HR.employee-type.create') }}">Employee Type Setup</a></li>
                                <li><a href="{{ route('HR.department.create') }}">Department setup</a></li>
                                <li><a href="{{ route('HR.weekend-package.create') }}">Weekend Package Setup</a></li>
                                <li><a href="{{ route('HR.facility-package.create') }}">Facility Package Setup</a></li>
                                <li><a href="{{ route('HR.bonous-package.create') }}">Bonous Package Setup</a></li>
                                <li><a href="{{ route('HR.currency-setup.create') }}">Currency Setup</a></li>
                                <li><a href="{{ route('HR.result-setup.create') }}">Result Setup</a></li>
                                <li><a href="{{ route('HR.Institute-setup.create') }}">Institute Setup</a></li>
                                <li><a href="{{ route('HR.organization-setup.create') }}">Organization Setup </a></li>
                                <li><a href="{{ route('HR.section-setup.create') }}">Section Setup</a></li>
                                <li><a href="{{ route('HR.designation-setup.create') }}">Designation Setup</a></li>
                                <li><a href="{{ route('HR.notice-template-setup.create') }}">Notice Template Setup</a>
                                </li>
                            </ul>
                        </li> --}}
                        {{-- <li><a href="{{ route('HR.warning-notice.create') }}">Warning Notice</a></li> --}}
                        {{-- <li><a href="{{ route('HR.show-case-notice.create') }}">Show Case Notice</a></li> --}}
                        <li><a href="{{ route('advice-letter.create') }}">Advice Letter</a></li>
                        {{-- <li><a href="{{ route('HR.advice-letter.create') }}">Advice Letter</a></li> --}}
                        <li><a href="{{ route('HR.employee-leave-status.create') }}">Employee Leave Status</a></li>
                        <li><a href="{{ route('attendence.create') }}">Attendence</a></li>
                        <li><a href="{{ route('HR.leave-application.create') }}">Leave Application</a></li>
                        {{-- <li><a href="{{ route('notice-board.create') }}">Notice Board</a></li> --}}
                        {{-- <li><a href="">Employee Attendance</a></li>
                        <li><a href="">Employee Attendance (short)</a></li> --}}
                    </ul>
                </li>
                {{-- <li><a href="{{ route('print-layout.print') }}">Print</a></li> --}}
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
