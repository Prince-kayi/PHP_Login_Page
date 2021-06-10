#include<Windows.h> // allows me to use Sleep which pauses the screen for a number of seconds.
#include<string>
#include<iostream>
#include<iomanip> // allows me to use setw
#include<cctype> // allows me to use touper
using namespace std;



char option, enter;

void DisplayHeading();
char DisplayMainMenu();
char InputNewCust();
void ReadCardDetails(long &AccNr, float &balance);
char DisplayGoBack(char &enter);
void DisplayBalance(long AccNr, float balance, int &amount);
char DisplayWithdrawMenu();
void Withdraw(float &balance, char woption, int &amount);
void withdrawC(float &balance, char woption, int &amount);
void DisplayDeposit(float &balance, int &amount);
void PurchaseAirtime(float &balance, int &amount);
void DisplayReport(int wcount, int dcount, int aircount, float withdrawtot, float airtot, float deposittot);
void DisplayLogo();
void DisplayLoading();


void main()
{
	system("color 3F"); // this changes the colour of the sceen and text. we changed it to the first national banks colors.
	int dcount = 0, wcount = 0, aircount = 0; // these are our "counters" it is placed in my switch statement in our main function.
	float deposittot = 0, airtot = 0, withdrawtot = 0; // counts the total amount for each transaction made and totals it. 
	char woption = 'x', option, newcust;
	long AccNr;
	float balance, total = 0;
	int amount = 0;

	DisplayLogo();

	DisplayHeading();
	newcust = InputNewCust();

	while (newcust != 'N')
	{

		ReadCardDetails(AccNr, balance);
		system("CLS");
		DisplayHeading();
		option = DisplayMainMenu();
		while (option != 'E')
		{
			system("CLS");

			switch (option)
			{

			case 'B':	DisplayBalance(AccNr, balance, amount);
				cin.get();
				system("CLS");
				DisplayHeading();
				option = DisplayMainMenu();
				break;

			case 'W':	woption = DisplayWithdrawMenu();
				if (enter == 'Y')// this refers to the "GoBack" if the the user chose to proceed the function will continue as normal else they will directed to the main menu.
				{
					Withdraw(balance, woption, amount);
					cin.get();
					system("CLS");
					DisplayBalance(AccNr, balance, amount);

					system("CLS");
					DisplayHeading();
					option = DisplayMainMenu();
					withdrawtot = withdrawtot + amount;
					wcount = wcount++;
				}
				else
				{
					system("CLS");
					DisplayHeading();
					option = DisplayMainMenu();
				}
				break;

			case 'D':	DisplayDeposit(balance, amount);
				if (enter == 'Y')
				{
					cin.get();
					system("CLS");
					DisplayBalance(AccNr, balance, amount);
					system("CLS");
					DisplayHeading();
					option = DisplayMainMenu();
					dcount = dcount++;
					deposittot = deposittot + amount;
				}
				else
				{
					system("CLS");
					DisplayHeading();
					option = DisplayMainMenu();
				}

				break;


			case 'A':	PurchaseAirtime(balance, amount);
				if (enter == 'Y')
				{
					system("CLS");
					DisplayBalance(AccNr, balance, amount);
					cin.get();
					system("CLS");
					DisplayHeading();
					option = DisplayMainMenu();
					aircount = aircount++;
					airtot = airtot + amount;
				}
				else
				{
					system("CLS");
					DisplayHeading();
					option = DisplayMainMenu();
				}
				break;

			default:system("CLS");

			}

		}
		system("CLS");
		DisplayHeading();
		DisplayLogo();
		system("CLS");
		DisplayHeading();
		newcust = InputNewCust();
		newcust = toupper(newcust);
	}
	if (wcount == 0 && dcount == 0 && aircount == 0)
	{
		system("CLS");
		DisplayHeading();
		cout << "There were no transactions made today, press any key to exit.......";
		cin.get();
		cout << endl;
	}
	else
	{
		DisplayReport(wcount, dcount, aircount, withdrawtot, airtot, deposittot);
	}
}

void DisplayHeading()
{
	cout << endl;
	cout << setw(43) << "First National Bank" << endl;
	cout << "       _________________________________________________________\n";
	cout << endl;
	cout << endl;
} //|This function displays the heading where necessary
char DisplayMainMenu()
{
	char option;

	cout << setw(7) << "W" << setw(20) << "Withdraw Funds" << endl;
	cout << endl;
	cout << setw(7) << "D" << setw(20) << "Make a Deposit" << endl;
	cout << endl;
	cout << setw(7) << "B" << setw(21) << "Display Balance" << endl;
	cout << endl;
	cout << setw(7) << "A" << setw(22) << "Purchase Airtime" << endl;
	cout << endl;
	cout << endl;
	cout << setw(7) << "E" << setw(10) << "Exit" << endl;
	cout << endl;
	cout << endl;
	cout << "Please select an option : ";
	cin >> option;
	option = toupper(option);
	cin.clear();
	cin.ignore(10000, '\n');
	while (option != 'W' && option != 'D' && option != 'B' && option != 'A' && option != 'E')
	{
		cout << "Invalid option, Please enter a vaid option :";
		cin >> option;
		option = toupper(option);
		cin.clear();
		cin.ignore(10000, '\n');
	}
	return(option);
} //This function displays the main menu, it also allows the user to enter their option. The option is then validated and returned.
char InputNewCust()
{
	char newcust;
	cout << endl;
	cout << endl;
	cout << "Please enter Y to insert card or N to stop : ";
	cin >> newcust;
	newcust = toupper(newcust);
	cin.clear();
	cin.ignore(10000, '\n');

	while (newcust != 'Y' && newcust != 'N')
	{
		cout << ">>> Invalid value, Please enter a Y to insert card or N to stop : ";
		cin >> newcust;
		newcust = toupper(newcust);
		cin.clear();
		cin.ignore(10000, '\n');
	}

	return newcust;
} //This function promts and recieves a char to "enter" the bank, it then validates the char enterd and returns it.
void ReadCardDetails(long &AccNr, float &balance)
{

	cout << endl;
	cout << endl;
	cout << "Please be patient as we are Reading details from card.............." << endl;
	cout << endl;
	cout << endl;
	cout << "Enter Account number : ";
	cin >> AccNr;
	cin.clear();
	cin.ignore(10000, '\n');

	while (AccNr<10000000 || AccNr>99999999)
	{
		cout << endl;
		cout << "Invalid Account Number, Please enter a valid number : ";
		cin >> AccNr;
		cin.clear();
		cin.ignore(10000, '\n');
	}
	cout << endl;
	cout << "Enter Account Balance : R";
	cin >> balance;
	cin.clear();
	cin.ignore(10000, '\n');

	while (balance < 0)
	{

		cout << endl;
		cout << "Invalid value, please enter a valid value : R";
		cin >> balance;
		cin.clear();
		cin.ignore(10000, '\n');

	}

} // \This function recieves both the balance and account number and validates them accordingly.
char DisplayGoBack(char&enter)
{

	DisplayHeading();
	cout << endl;
	cout << "Please B to go back or Y to proceed : ";
	cin >> enter;
	enter = toupper(enter);
	cin.clear();
	cin.ignore(10000, '\n');
	while (enter != 'Y' && enter != 'B')
	{
		cout << "invalid value, B to go back to main menue or Y to exit :";
		cin >> enter;
		enter = toupper(enter);
		cin.clear();
		cin.ignore(10000, '\n');
	}

	return enter;
} // This is a function basically serves as a "back button"  it divert the user back to the main menu should they enter a 'N'. The value enterd is also validated. If the user selects 'Y' the program will continue as normal.
void DisplayBalance(long AccNr, float balance, int &amount)
{
	DisplayHeading();
	cout << setw(20) << "Balance Equiry" << endl;
	cout << endl;
	cout << "Account number : " << AccNr << endl;
	cout << endl;
	cout << "Debit : R" << amount;
	cout << endl;
	cout << endl;
	cout << "Balance : R" << balance;
	cout << endl;
	cin.get();
} // This function display the users balance and/or new balance throughout the main function.
char DisplayWithdrawMenu()
{
	char woption;
	system("CLS");
	enter = DisplayGoBack(enter);
	if (enter == 'Y')
	{
		system("CLS");
		DisplayHeading();
		cout << setw(17) << "Select Amount" << endl;
		cout << endl;
		cout << setw(3) << "A." << setw(9) << "R250" << endl;
		cout << endl;
		cout << setw(3) << "B." << setw(9) << "R500" << endl;
		cout << endl;
		cout << setw(3) << "C." << setw(15) << "Own amount" << endl;
		cout << endl;
		cout << setw(3) << "Please select an option : ";
		cin >> woption;
		woption = toupper(woption);
		while (woption != 'A' && woption != 'B' && woption != 'C')
		{
			cout << "Invalid option, Please enter a valid option : ";
			cin >> woption;
			woption = toupper(woption);
		}
		return woption;
	}
} // This function displays the withdrawl menu, it validates the option and then returns the correct value.
void Withdraw(float &balance, char woption, int &amount)
{
	amount = 0;
	if (woption == 'A')
	{
		amount = 250;

		if (balance < amount)
		{
			amount = 0;
			withdrawC(balance, woption, amount);
		}
	}

	if (woption == 'B')
	{
		amount = 500;

		if (balance < amount)

		{
			amount = 0;
			withdrawC(balance, woption, amount);
		}
	}

	if (woption == 'C')
	{

		cout << endl;
		cout << endl;
		cout << "Please enter the amount you would like to withdraw : R";
		cin >> amount;
		cin.clear();
		cin.ignore(10000, '\n');
		amount = (amount / 10) * 10;

		while (amount <= 0)
		{
			cout << endl;
			cout << "invalid value, must be >0, please reenter  : R";
			cin >> amount;
			cin.clear();
			cin.ignore(10000, '\n');
			amount = (amount / 10) * 10; //This calculation ensures that coins are not being withdrawn from the bank, it rounds the value of to the nearest 10th.
		}

		while (amount > balance)
		{
			cout << endl;
			cout << "You only have R" << balance << " in your acount, please enter a differnt value :R";
			cin >> amount;
			cin.clear();
			cin.ignore(10000, '\n');
			amount = (amount / 10) * 10;

		}

	}

	balance = balance - amount;
} // This function validates the amount being drawn from the account with the users acctual balance. it ensure that there is no overdraft. if the user has insuffienct funds they will be directed to s new menu.
void withdrawC(float &balance, char woption, int &amount)
{
	amount = 0;
	if (woption == 'A')
	{
		system("CLS");
		DisplayHeading();
		cout << endl;
		cout << "You only have R" << balance << " Please select a different option : ";
		cout << endl;
		cout << endl;
		cout << setw(25) << "Select Amount" << endl;
		cout << endl;
		cout << "C." << setw(15) << "Own amount" << endl;
		cout << endl;
		cout << "Please select an option : ";
		cin >> woption;
		woption = toupper(woption);
		cin.clear();
		cin.ignore(10000, '\n');
		while (woption != 'C')
		{
			cout << endl;
			cout << "Invalid option, Please enter a valid option : ";
			cin >> woption;
			woption = toupper(woption);
			cin.clear();
			cin.ignore(10000, '\n');
		}
		Withdraw(balance, woption, amount);
	}

	if (woption == 'B' && balance >250)
	{
		system("CLS");
		DisplayHeading();
		cout << "You only have R" << balance << " Please select a different option : ";
		cout << endl;
		cout << endl;
		cout << setw(25) << "Select Amount" << endl;
		cout << endl;
		cout << "A." << setw(15) << "R250" << endl;
		cout << endl;
		cout << "C." << setw(15) << "Own amount" << endl;
		cout << endl;
		cout << "Please select an option : ";
		cin >> woption;
		woption = toupper(woption);
		cin.clear();
		cin.ignore(10000, '\n');

		while (woption != 'A' && woption != 'C')
		{
			cout << endl;
			cout << "Invalid option, Please enter a valid option : ";
			cin >> woption;
			woption = toupper(woption);
			cin.clear();
			cin.ignore(10000, '\n');
		}
		Withdraw(balance, woption, amount);

	}

} // if the user has=d insuffienct funds they will be directed to theh menu which will limit their optons down to the actual amount int heir account. for example if they have R400 in their account only options a and c will be avalibale for them.
void DisplayDeposit(float &balance, int &amount)
{
	amount = 0;
	enter = DisplayGoBack(enter);
	if (enter == 'Y')
	{
		system("CLS");
		DisplayHeading();
		cout << "Please enter the amount you would like to deposit : R";
		cin >> amount;
		cin.clear();
		cin.ignore(10000, '\n');
		amount = (amount / 10) * 10;
		while (amount < 0)
		{
			cout << "Invalid value, please enter a number >0 :R";
			cin >> amount;
			cin.clear();
			cin.ignore(10000, '\n');
			amount = (amount / 10) * 10;
		}
		balance = balance + amount;
	}
} // This function allows the user to enter  the amount they would like to deposit into their account, it then validates the amount and updates the users balance.
void PurchaseAirtime(float &balance, int &amount)
{
	long cell;
	amount = 0;
	char confirm;

	enter = DisplayGoBack(enter);
	if (enter == 'Y')
	{
		cout << endl;
		cout << "Please enter the cellphone number : 0";
		cin >> cell;
		cout << endl;

		cout << "Please enter the amount you would like to purchase for :R";
		cin >> amount;
		cin.clear();
		cin.ignore(10000, '\n');

		while (amount < 1)
		{
			cout << "invalid amount, please enter a value >1 : R";
			cin >> amount;
			cin.clear(); // clears any bad values
			cin.ignore(10000, '\n'); // ignore up to 1000 incorrect values.
		}
		while (amount>balance)
		{
			cout << "You only have R" << balance << " please re-enter :R";
			cin >> amount;
			cin.clear();
			cin.ignore(10000, '\n');
		}
		cout << endl;
		cout << endl;
		cout << "Please confirm that the airtime is being sent to 0" << cell << endl;
		cout << endl;
		cout << "Y to confirm or N to rectify :";
		cin >> confirm;
		confirm = toupper(confirm);
		while (confirm != 'Y' && confirm != 'N')
		{
			cout << endl;
			cout << "invalid option, Y to confirm or N to rectify";
			cin >> confirm;
			confirm = toupper(confirm);
		}
		if (confirm == 'N') // allow the user to re-enter a cellphone number they entered one incorrectly.
		{
			cout << endl;
			cout << "Please enter the correct cell phone number : 0";
			cin >> cell;
		}
		cout << endl;
		cout << "Please be patient while we send the airtime.......";
		cout << endl;
		DisplayLoading();


		balance = balance - amount;
	}

} // This function allows the user to purchse airtime from their account and send it to any cellphone. Their balance is then adjusted accordingly.
void DisplayReport(int wcount, int dcount, int aircount, float withdrawtot, float airtot, float deposittot)
{
	system("CLS");
	DisplayHeading();

	cout << endl;
	cout << "Number of withdrawls :" << wcount << setw(22) << "Total R" << withdrawtot;
	cout << endl;
	cout << endl;
	cout << "Number of Deposits :" << dcount << setw(24) << "Total R" << deposittot;
	cout << endl;
	cout << endl;
	cout << "Number of Airtime Purchases :" << aircount << setw(15) << "Total R" << airtot;

	cout << endl;
	cout << endl;
	cin.get();
	cin.get();
	system("CLS");
} // This function display the end of day report, it is only displayed at the end of the day.
void DisplayLogo()
{
	DisplayHeading();
	cout << endl;
	cout << "                       *****************                  " << endl;
	cout << "                    ************************              " << endl;
	cout << "                  ***************************              " << endl;
	cout << "	           *********************************          " << endl;
	cout << "	        *************************************       " << endl;
	cout << "	       ***********   ************************         " << endl;
	cout << "	                   ***************************         " << endl;
	cout << "	    *************************************             " << endl;
	cout << "	      ******************************************      " << endl;
	cout << "	  ********************    ***********************     " << endl;
	cout << "	   *****************       *******************    " << endl;
	cout << "	    **************        **   *******************    " << endl;
	cout << "	  **********  ***  **     *************************   " << endl;
	cout << "	 ************  **   ************   *    *   ******   " << endl;
	cout << "	   *  ******     **   *********   * *                  " << endl;
	cout << "	    * *****        *  ********  *                     " << endl;
	cout << "	                     ********* *                        " << endl;
	cout << "	                       ******                           " << endl;
	cout << " 	                       ******                           " << endl;
	cout << "  	                       ******                           " << endl;
	cout << "	                       ******                           " << endl;
	cout << "	                       ******                           " << endl;



	cout << "		       HOW CAN WE HELP YOU?			";
	cout << endl;
	cout << endl;
	cout << "                        "; DisplayLoading();
	system("CLS");
} // this is our banks logo
void DisplayLoading()
{
	cout << "Loading";
	for (int i = 0; i<3; i++)
	{
		cout << "....";
		Sleep(1000);
	}
} // This function makes a 3 second "loading" in certain parts of my progra to makeit look more reslistic.