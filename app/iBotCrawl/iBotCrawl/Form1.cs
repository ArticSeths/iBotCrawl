using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.IO;
using Newtonsoft.Json;
using System.Diagnostics;
using System.Security.Cryptography;
using Quobject.SocketIoClientDotNet.Client;


namespace iBotCrawl
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
            
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            Console.WriteLine("Iniciando app");
            startConection();
            
        }
        

        /* ------ INICIAMOS PRIMER CHEQUEO DE CONFIGURACIONES ------ */
        public void startConection()
        {
            string filepath = Application.StartupPath;
            Console.WriteLine(filepath);
            DirectoryInfo d = new DirectoryInfo(filepath);
            FileInfo[] findfile = d.GetFiles("config.json");
            if (findfile.Length == 0)
            {
                lblStatusCheck.Text = "No se ha encontrado archivo de configuracion";
                showLoginPage();
            }
            else
            {
                lblStatusCheck.Text = "Se ha encontrado archivo de configuracion";
                initConfiguration();
            }
        }

        public void showLoginPage()
        {
            login lgn = new login();
            {
                lgn.Show();
                
            }
            Form1 frm = new Form1();
            {
                frm.Hide();
            }
        }

        public void initConfiguration()
        {
            Socket socket = IO.Socket("https://www.ibotcrawl.com:4507/");
            socket.On(Socket.EVENT_CONNECT, () =>
            {
                //socket.Emit("new", this.textBox3.Text);
            });

            socket.On("randomNumber", (data) =>
            {
                var randomArr = new { rand = "" };
                var number = JsonConvert.DeserializeAnonymousType((string)data, randomArr);
                //textBox2.Text = (string)number.rand;

            });
        }
        /* //////////////////////////////////////////////////////// */

    }
}
