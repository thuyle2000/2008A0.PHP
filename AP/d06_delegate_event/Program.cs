using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace d06_delegate_event
{
    class Program
    {
        static void Main(string[] args)
        {
            //DemoDelegate dd = new DemoDelegate();
            //dd.test();

            DemoEvent de = new DemoEvent();
            de.Input();
        }
    }
}
