turbine1 = peripheral.wrap("BigReactors-Turbine_29")

m = peripheral.wrap("back")

function clear()
m.clear()  
term.clear()
m.setBackgroundColor(colors.black)
end

function draw_line(x, y, length ,color)
m.setBackgroundColor(color)
m.setCursorPos(x,y)
m.write(string.rep(" ", length))
end

function progress_bar(x,y,length,minVal,maxVal,bar_color,bg_color)
draw_line(x,y,length,bg_color)  --  background bar
local barSize = math.floor((minVal/maxVal) * length)
draw_line(x,y,barSize,bar_color) -- progressbar
end
 
while true do
m.clear()
m.setTextScale(1)
m.setCursorPos(1,1)
m.write("Turbine 1")
m.setCursorPos(1,2)
m.write(math.floor(turbine1.getEnergyProducedLastTick()))
m.setCursorPos(1,3)
m.write("Turbine 1 RPM: ")
m.write(turbine1.getRotorSpeed())
-- Total Power
m.setCursorPos(1,1)
m.write("Total")
m.setCursorPos(1,1)
m.write("Power")
--m.setTextScale(2)
m.setCursorPos(1,3)
m.write(math.floor(turbine1.getEnergyProducedLastTick()))
progress_bar(4,4,50,turbine1.getRotorSpeed(),1820,colors.green,colors.red)
m.setBackgroundColor(colors.black)
 
sleep(1)
 
end