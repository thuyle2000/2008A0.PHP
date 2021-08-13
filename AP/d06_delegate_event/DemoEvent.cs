using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace d06_delegate_event
{
    //1. dinh nghia delegate
    public delegate void DEventHandle(string s);

    public class DemoEvent
    {
        //2. khai bao event co kieu DEventHandle
        public event DEventHandle evenValidation;

        //3. lap trinh ham xu ly event [evenValidation]
        public void validateNumber(string message)
        {
            throw new FormatException(message);
        }

        //4.dang ky voi he thong ham validateNumber() se chay khi event [evenValidation] phat sinh
        public DemoEvent()
        {
            evenValidation = validateNumber;
        }

        public void Input()
        {
            Console.WriteLine("nhap so nguyen [0-100] : ");
            int n = int.Parse(Console.ReadLine().Trim());
            if(n>=0 && n <= 100)
            {
                Console.WriteLine($" {n} la 1 gia tri hop le !");
            }
            else
            {
                //5. raise event
                //de xu ly loi nhap du lieu ko hop le  
                evenValidation("Invalid number ! [0-100] !");
            }
        }
    }
}
