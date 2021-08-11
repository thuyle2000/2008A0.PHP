using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace d05_abstract
{
    //lop truu tuong Shape
    public abstract class Shape
    {
        //ham truu tuong tinh dien tich cua 1 doi tuong hinh hoc bat ky
        public abstract float area();

        //ham truu tuong tinh chu vi cua 1 doi tuong hinh hoc bat ky
        public abstract float periperal();

        public abstract void output();

        public abstract void input();
        public override string ToString()
        {
            return $"Dien tich : { area() }, Chu vi: { periperal() } ";
        }
    }
}
