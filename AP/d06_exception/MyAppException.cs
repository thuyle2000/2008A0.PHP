using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace d06_exception
{
    //day la lop mo ta 1 so loi xu ly du lieu trong ung dung
    class MyAppException:Exception
    {
        public MyAppException(): base("Loi sai !!!")
        {

        }
        public MyAppException(string message):base(message)
        {

        }
    }
}
