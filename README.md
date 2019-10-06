<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

8 Hours Challenge - Weather Information

## Preface
Everyone always think there would be somebody, but the fact is that there are nobody. So, let us be the "nobody". Once you pure your soul and passion into the project, The project would not be just a project, and it may help you or others one day. Remind ourself that learning from the world and contributing to the world.  

## Design Methodology
We need to strike a balance between timeline and technical debt. We should adopt the most useful tool other than adopt latest tools. We need to design, develop and release in 8 hours. Let's do it.

1. Understand goal deeply
Our goal is to provide the correct weather information for foreign travelers.

2. Design the UI/UX and logic
According to the goal, I choose responsitive web design to fix requirement.
You would not always bring the laptop when you are traveling. Howerer, you would bring your smart phone definitely. I don't not have much time, so I search a suitable opensource responsitive web design template.
If I am traveling, I would want to know current weather and a few hours later. The first page would directly current show city and weather, and then click the city picture to get the forecast weather.

3. Read weather API document
Understand that what could we get from the OpenWeather API. Depend on our goal, we need to get current and forecast weatcher. We totally use two as below.
Current Weather : https://api.openweathermap.org/data/2.5/weather?q={city name}
Forecast Weather : https://api.openweathermap.org/data/2.5/forecast?q={city name}
At this part, you need to register to get the api key.

## Develop Methodology

1. Deal with weather information
I don't not spend much time to reformat data, but to think how to let UI/UX more easily to use.
We just need to call openweather api to get data and render to the view.

2. Use Blade render view
I decide to use Blade instead of importing vue.js because we don't have much interaction behaviors at this stage. 

3. Test and adjust
Test every element and function is working perfectly and Adjust UI to enhance user experience. For example, let the forecast weather font become red when the mouse hover on it. The user can easily to read weather information.

## Future Technical Plan 
In the logn term, we need to decrease technical debt but the fact is that you would never have enough time.
We just choose the most important part and optimize the other part in the future. We set some plan to improve loading speed and maintainability.

- Use redis to save weather data because weather data would not change every minutes. It can increase loading time. 
- Import frontened Framework to do interaction behaviors and it can more easy to mainin for teams.

## Future Feature Plan

- Traveler can directly type city name to get the city weather information.
- Traveler can set default cities to show on the landing page.

## Philosophy & Motto

- Let us be the nobody. Share the knowledge with others to fullfill the world.
- Everying has the reason why it exist. Adopt the most suitable tools to achieve the requirement other than always persue latest one.

## Challenge Feedback
Thank for your challenge this time. It also lets me to think over about my methodology when I get a new project. Although I didn't do very good in the timer test, I can get more challenge if you need more evindence to prove myself ability. In conclusion, it is a very good challenge for me other than just a similarly leetcode problem.　ありがとうございます。 