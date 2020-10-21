using NoViolencia.Model;
using System;
using Xamarin.Forms;

namespace NoViolencia
{
    public partial class MainPage : ContentPage
    {
        ConexionBD ConexionBD = new ConexionBD();
        public MainPage()
        {
            InitializeComponent();
                       
        }

        async void OnButtonClicked(object sender, EventArgs args)
        {
            await DisplayAlert("Alert","hello", "OK");
            Console.WriteLine("****************************");
            Console.WriteLine(ConexionBD.Conexion());
        }



    }
}
